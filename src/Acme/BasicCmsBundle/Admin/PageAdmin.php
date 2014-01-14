<?php

namespace Acme\BasicCmsBundle\Admin;

use Sonata\DoctrinePHPCRAdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Knp\Menu\ItemInterface;
use Sonata\AdminBundle\Admin\AdminInterface;

class PageAdmin extends Admin
{
    public function configure()
    {
        $this->setSubClasses(array(
            'Page' => 'Acme\BasicCmsBundle\Document\Page',
            'Contact Page' => 'Acme\BasicCmsBundle\Document\ContactPage',
            'Post Index' => 'Acme\BasicCmsBundle\Document\PostIndex',
        ));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title', 'text')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('form.group_general')
            ->add('title', 'text')
            ->add('content', 'textarea', array(
                'attr' => array(
                    'cols' => 80,
                    'rows' => 40,
                    'class' => 'content_textarea',
                )
            ))
        ->end();
    }

    public function prePersist($document)
    {
        $parent = $this->getModelManager()->find(null, '/cms/pages/main');
        $document->setParent($parent);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title', 'doctrine_phpcr_string');
    }

    public function getExportFormats()
    {
        return array();
    }

    protected function configureSideMenu(ItemInterface $menu, $action, AdminInterface $childAdmin = null)
    {
        if ('edit' !== $action) {
            return;
        }

        $page = $this->getSubject();

        $menu->addChild('make-homepage', array(
            'label' => 'Make Homepage',
            'attributes' => array('class' => 'btn'),
            'route' => 'make_homepage',
            'routeParameters' => array(
                'id' => $page->getId(),
            ),
        ));
    }
}
