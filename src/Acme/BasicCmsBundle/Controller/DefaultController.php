<?php

namespace Acme\BasicCmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pagerfanta\Adapter\DoctrineODMPhpcrAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Component\HttpFoundation\Request;

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

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $homepage = $this->getSite()->getHomepage();

        if (!$homepage) {
            throw $this->createNotFoundException('No homepage configured');
        }

        return $this->forward('AcmeBasicCmsBundle:Default:page', array(
            'contentDocument' => $homepage,
        ));
    }

    /**
     * @Template()
     */
    public function pageAction($contentDocument, $isHomepage = false)
    {
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
        $qb->orderBy()->asc()->localName('p');

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
        $contentDocument = $request->get('contentDocument');

        return array(
            'post' => $contentDocument,
        );
    }

    /**
     * @Template()
     */
    public function recentPostsAction(Request $request)
    {
        $qb = $this->getDm()->getRepository('AcmeBasicCmsBundle:Post')->createQueryBuilder('p');
        $qb->orderBy()->desc()->field('p.date');
        $posts = $qb->getQuery()->execute();

        return array(
            'posts' => $posts,
        );
    }
}
