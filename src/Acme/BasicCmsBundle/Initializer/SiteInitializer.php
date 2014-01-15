<?php

namespace Acme\BasicCmsBundle\Initializer;

use Doctrine\Bundle\PHPCRBundle\Initializer\InitializerInterface;
use PHPCR\SessionInterface;
use PHPCR\Util\NodeHelper;

class SiteInitializer implements InitializerInterface
{
    public function init(SessionInterface $session)
    {
        // create the 'cms', 'pages', and 'posts' nodes
        NodeHelper::createPath($session, '/cms/pages');
        NodeHelper::createPath($session, '/cms/posts');
        NodeHelper::createPath($session, '/cms/routes');
        NodeHelper::createPath($session, '/cms/tags');
        NodeHelper::createPath($session, '/cms/messages');
        $session->save();

        // map a document to the 'cms' node
        $cms = $session->getNode('/cms');
        $cms->setProperty(
            'phpcr:class',  'Acme\BasicCmsBundle\Document\Site'
        );

        $session->save();
    }
}
