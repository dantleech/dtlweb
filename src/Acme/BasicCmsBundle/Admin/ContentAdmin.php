<?php

namespace Acme\BasicCmsBundle\Admin;

use Sonata\DoctrinePHPCRAdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Knp\Menu\ItemInterface;
use Sonata\AdminBundle\Admin\AdminInterface;
use FOS\HttpCacheBundle\CacheManager;
use DTL\Symfony\HttpCacheTagging\TagManagerInterface;

class ContentAdmin extends Admin
{
    protected $tagManager;

    public function setTagManager(TagManagerInterface $tagManager)
    {
        $this->tagManager = $tagManager;
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
            ->add('published', 'checkbox', array(
                'required' => false,
            ))
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

    public function postPersist($document)
    {
        $this->tagManager->invalidateTags($document->getCacheTags());
    }

    public function postUpdate($document)
    {
        $this->tagManager->invalidateTags($document->getCacheTags());
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
