<?php

namespace Acme\BasicCmsBundle\Admin;

use Sonata\DoctrinePHPCRAdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Knp\Menu\ItemInterface;
use Sonata\AdminBundle\Admin\AdminInterface;

class CommentAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id', 'text')
            ->add('title')
            ->add('author')
            ->add('email')
            ->add('createdAt')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('form.group_general')
            ->add('title', 'text')
            ->add('author', 'text')
            ->add('email', 'text')
            ->add('createdAt', 'datetime')
            ->add('comment', 'textarea')
        ->end();
    }

    public function prePersist($document)
    {
        $parent = $this->getModelManager()->find(null, '/cms/pages');
        $document->setParent($parent);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id', 'doctrine_phpcr_string');
        $datagridMapper->add('title', 'doctrine_phpcr_string');
        $datagridMapper->add('author', 'doctrine_phpcr_string');
    }

    public function getExportFormats()
    {
        return array();
    }
}
