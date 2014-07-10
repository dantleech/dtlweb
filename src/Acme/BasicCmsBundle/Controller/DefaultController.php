<?php

namespace Acme\BasicCmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pagerfanta\Adapter\DoctrineODMPhpcrAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Component\HttpFoundation\Request;
use Acme\BasicCmsBundle\Document\Comment;
use Acme\BasicCmsBundle\Document\Message;
use Symfony\Component\Form\FormError;

class DefaultController extends Controller
{
    protected function getDm()
    {
        return $this->get('doctrine_phpcr')->getManager();
    }

    protected function getSite()
    {
        $site = $this->getDm()->find('Acme\BasicCmsBundle\Document\Site', '/cms');

        return $site;
    }

    protected function checkPublished($doc)
    {
        if (!$doc->isPublished()) {
            throw $this->createNotFoundException(
                'This document has not been published.'
            );
        }
    }

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $homepage = $this->getSite()->getHomepage();

        if (!$homepage) {
            throw $this->createNotFoundException('No homepage configured');
        }

        return $this->redirect($this->generateUrl($homepage));
    }

    /**
     * @Template()
     */
    public function pageAction($contentDocument, $isHomepage = false)
    {
        $this->checkPublished($contentDocument);

        $dm = $this->get('doctrine_phpcr')->getManager();
        $posts = $dm->getRepository('Acme\BasicCmsBundle\Document\Post')->findAll();
        $isHomepage = $this->getSite()->getHomepage() === $contentDocument;

        return array(
            'page'  => $contentDocument,
            'posts' => $posts,
            'is_homepage' => $isHomepage,
        );
    }

    public function tagCloudAction()
    {
        $tagDocs = $this->getDm()->getRepository('DTL\PhpcrTaxonomyBundle\Document\Taxon')
            ->findAll();


        $tags = array();
        $max = 0;
        foreach ($tagDocs as $tagDoc) {
            if ($referrerCount = $tagDoc->getReferrerCount()) {
                $tags[$tagDoc->getName()] = array(
                    'referrer_count' => $referrerCount,
                );
                if ($referrerCount > $max) {
                    $max = $referrerCount;
                }
            }
        }

        foreach ($tags as $tag => $data) {
            $tags[$tag]['weight'] = round($data['referrer_count'] / $max, 2);
        }

        $keys = array_keys($tags);
        $new = array();
        shuffle($keys);

        foreach($keys as $key) {
            $new[$key] = $tags[$key];
        }

        $tags = $new;

        return $this->render('AcmeBasicCmsBundle:Default:tagCloud.html.twig', array(
            'tags' => $tags,
        ));
    }

    /**
     * @Route(
     *   name="make_homepage",
     *   pattern="/_cms/make_homepage/{id}",
     *   requirements={"id": ".+"}
     * )
     */
    public function makeHomepageAction($id)
    {
        $dm = $this->get('doctrine_phpcr')->getManager();

        $site = $dm->find(null, '/cms');
        if (!$site) {
            throw $this->createNotFoundException('Could not find /cms document!');
        }

        $page = $dm->find(null, $id);

        $site->setHomepage($page);
        $dm->persist($page);
        $dm->flush();

        return $this->redirect($this->generateUrl('admin_acme_basiccms_page_edit', array(
            'id' => $page->getId()
        )));
    }

    /**
     * @Route(
     *   name="tag_referrer_index",
     *   pattern="/tags/{tag}"
     * )
     */
    public function tagReferrerIndexAction($tag)
    {
        $qb = $this->getDm()->getRepository('DTL\PhpcrTaxonomyBundle\Document\Taxon')->createQueryBuilder('x');
        $qb->where()->eq()->localName('x')->literal($tag);
        $tags = $qb->getQuery()->execute();
        $referrers = array();

        foreach ($tags as $tagDoc) {
            foreach ($tagDoc->getReferrers() as $referrer) {
                $referrers[] = $referrer;
            }
        }

        return $this->render('AcmeBasicCmsBundle:Default:tag_referrer_index.html.twig', array(
            'tag' => $tag,
            'referrers' => $referrers,
        ));
    }

    /**
     * @Route(
     *   name="post_index",
     *   pattern="/posts"
     * )
     * @Template()
     */
    public function postIndexAction(Request $request)
    {
        $contentDocument = $request->get('contentDocument');
        $page = $request->get('page', 1);
        $qb = $this->getDm()->getRepository('Acme\BasicCmsBundle\Document\Post')
            ->createQueryBuilder('p');
        $qb->orderBy()->desc()->field('p.date');
        $qb->where()->eq()->field('p.published')->literal(true);

        $adapter = new DoctrineODMPhpcrAdapter($qb);
        $pager = new Pagerfanta($adapter);
        $pager->setCurrentPage($page);

        return array(
            'page' => $contentDocument,
            'pager' => $pager,
        );
    }

    /**
     * @Template()
     */
    public function postAction(Request $request)
    {
        $invalidMessages = array(
            'Oops, that might have been a tricky one. Try again',
            'Awww, bad luck. Try again',
            'Pfff. Captchas suck, try again',
            'Hmmm. Are you human? Try again',
        );
        $contentDocument = $request->get('contentDocument');
        $this->checkPublished($contentDocument);

        $commentManager = $this->get('acme.basic_cms.comment_manager');
        $generator = $this->get('dtl.expression_captcha.generator');
        $expressionLanguage = $this->get('dtl.expression_captcha.expression_language');
        $expressionGen = $generator->generateExpression();
        $invalidCaptcha = null;

        $comment = new Comment();
        $comment->setExpression($expressionGen->getExpression());
        $comment->setExpressionVars($expressionGen->getVars());
        $comment->setParent($contentDocument);

        $commentForm = $this->createForm('form', $comment);
        $commentForm->add('email');
        $commentForm->add('notify', 'checkbox', array(
            'label' => 'Notify me about new comments',
            'required' => false,
        ));
        $commentForm->add('author');
        $commentForm->add('comment', 'textarea');
        $commentForm->add('captcha', 'captcha', array(
            'invalid_message' => $invalidMessages[rand(0, count($invalidMessages) - 1)],
        ));
       
        $commentForm->handleRequest($request);

        if ($commentForm->isValid()) {
            $this->getDm()->persist($comment);
            $this->getDm()->flush();

            $commentManager->notifySiteOwer($this->getsite(), $comment);
            $commentManager->notifySubscribers($this->getSite(), $comment);

            return $this->redirect($this->generateUrl($contentDocument));
        }


        return array(
            'post' => $contentDocument,
            'comment_form' => $commentForm->createView(),
        );
    }

    /**
     * @Template()
     */
    public function recentPostsAction(Request $request)
    {
        $qb = $this->getDm()->getRepository('AcmeBasicCmsBundle:Post')->createQueryBuilder('p');
        $qb->orderBy()->desc()->field('p.date');
        $qb->where()->eq()->field('p.published')->literal(true);
        $qb->setMaxResults(10);
        $posts = $qb->getQuery()->execute();

        return array(
            'posts' => $posts,
        );
    }

    /**
     * @Template()
     */
    public function contactAction(Request $request)
    {
        $contentDocument = $request->get('contentDocument');

        $message = new Message();
        $form = $this->createFormBuilder($message)
            ->add('name')
            ->add('email')
            ->add('captcha', 'captcha')
            ->add('message', 'textarea', array(
                'attr' => array('cols' => 60, 'rows' => 20)
            ))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $parent = $this->getDm()->find(null, '/cms/messages');
            $message->setParent($parent);
            $this->getDm()->persist($message);
            $this->getDm()->flush();

            $contactEmail = $this->container->getParameter('contact_email');
            $mailer = $this->get('mailer');
            $mail = $mailer->createMessage();
            $mail->setTo($contactEmail);
            $mail->setFrom($message->getEmail(), $message->getName());
            $mail->setSubject(sprintf('[DTLWEB] Message from %s', $message->getName()));
            $mail->setBody($message->getMessage());
            $mailer->send($mail);

            return $this->redirect($this->generateUrl('contact_success'));
        }

        return array(
            'page' => $contentDocument,
            'form' => $form->createView(),
        );
    }

    /**
     * @Template()
     */
    public function latestPostAction()
    {
        $qb = $this->getDm()->createQueryBuilder();
        $qb->from()->document('Acme\BasicCmsBundle\Document\Post', 'p')->end()
            ->orderBy()->desc()->field('p.date')->end()->end()
            ->where()->eq()->field('p.published')->literal(true)->end()->end()
            ->setMaxResults(1)
        ;
        $post = $qb->getQuery()->getOneOrNullResult();

        return $this->redirect($this->generateUrl($post));;
    }

    /**
     * @Route(name="contact_success", pattern="/contact_success")
     * @Template()
     */
    public function contactSuccessAction()
    {
        return array();
    }
}
