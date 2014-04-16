<?php

namespace Acme\BasicCmsBundle\Model;

use Acme\BasicCmsBundle\Document\Site;
use Acme\BasicCmsBundle\Document\Comment;

class CommentManager
{
    protected $mailer;
    protected $templating;

    public function __construct(\Swift_Mailer $mailer, \Twig_Environment $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
    }

    public function notifySiteOwer(Site $site, Comment $comment)
    {
        $contactEmail = $site->getContactEmail();

        $body = $this->templating->render(
            'AcmeBasicCmsBundle:Mail:siteOwnerNotification.html.twig',
            array(
                'site' => $site,
                'post' => $comment->getParent(),
                'comment' => $comment,
            )
        );

        $subject = sprintf('[DTLWEB] New comment on "%s" from "%s"',
            $comment->getParent()->getTitle(),
            $comment->getAuthor()
        );

        $mail = $this->mailer->createMessage();
        $mail->setTo($contactEmail);
        $mail->setFrom('noreply@dantleech.com');
        $mail->setSubject(sprintf($subject));
        $mail->setBody($body);
        $this->mailer->send($mail);
    }

    public function notifySubscribers(Site $site, Comment $comment)
    {
        $parent = $comment->getParent();
        $emails = array();

        foreach ($parent->getComments() as $comment) {
            if (!$email = $comment->getEmail()) {
                continue;
            }

            if (!$comment->getNotify()) {
                continue;
            }

            $emails[$comment->getEmail()] = $comment->getAuthor();
        }

        foreach ($emails as $email => $author) {
            echo $email;
            $body = $this->templating->render(
                'AcmeBasicCmsBundle:Mail:subscriberNotification.html.twig',
                array(
                    'site' => $site,
                    'comment' => $comment,
                    'author' => $author,
                    'post' => $comment->getParent(),
                )
            );

            $subject = sprintf('[dantleech.com] New comment on "%s" from "%s"',
                $comment->getParent()->getTitle(),
                $comment->getAuthor()
            );

            $mail = $this->mailer->createMessage();
            $mail->setTo($email);
            $mail->setFrom('noreply@dantleech.com');
            $mail->setSubject(sprintf($subject));
            $mail->setBody($body);
            $this->mailer->send($mail);
        }
    }
}
