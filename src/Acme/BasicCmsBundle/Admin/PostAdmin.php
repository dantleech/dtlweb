<?php

namespace Acme\BasicCmsBundle\Admin;

use Sonata\DoctrinePHPCRAdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use DTL\Symfony\Form\DataTransformer\ArrayToDelimitedStringTransformer;

class PostAdmin extends ContentAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);

        $builder = $formMapper->getFormBuilder();
        $formMapper
            ->with('form.group_general')
            ->add('date', 'date')
            ->add($builder->create('tags', 'text')->addModelTransformer(new ArrayToDelimitedStringTransformer()))
        ->end();
    }
}
