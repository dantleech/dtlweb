<?php

namespace Acme\BasicCmsBundle\Admin;

use Sonata\DoctrinePHPCRAdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\DataTransformer\DelimitedStringToArrayTransformer;

class PageAdmin extends ContentAdmin
{
    public function configure()
    {
        $this->setSubClasses(array(
            'Page' => 'Acme\BasicCmsBundle\Document\Page',
            'Contact Page' => 'Acme\BasicCmsBundle\Document\ContactPage',
            'Post Index' => 'Acme\BasicCmsBundle\Document\PostIndex',
            'Latest Blog Post' => 'Acme\BasicCmsBundle\Document\LatestBlogPost',
        ));
    }
}

