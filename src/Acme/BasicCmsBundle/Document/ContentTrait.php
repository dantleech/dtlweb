<?php

namespace Acme\BasicCmsBundle\Document;

use Ferrandini\Urlizer;

trait ContentTrait
{
    /**
     * @PHPCR\Id()
     */
    protected $id;

    /**
     * @PHPCR\ParentDocument()
     */
    protected $parent;

    /**
     * @PHPCR\String()
     */
    protected $title;

    /**
     * @PHPCR\NodeName()
     */
    protected $name;

    /**
     * @PHPCR\String(nullable=true)
     */
    protected $content;

    /**
     * @PHPCR\Referrers(
     *     referringDocument="Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\Route",
     *     referencedBy="content"
     * )
     */
    protected $routes;

    /**
     * @PHPCR\Children()
     */
    protected $children;

    /**
     * @PHPCR\Uuid()
     */
    protected $uuid;

    /**
     * @PHPCR\Boolean(nullable=true)
     */
    protected $published = false;

    public function getCacheTags()
    {
        return array(
            'content-' . $this->uuid
        );
    }

    public function getId()
    {
        return $this->id;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        $this->name = Urlizer::urlize($title);
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function getPublished() 
    {
        return $this->published;
    }
    
    public function setPublished($Published)
    {
        $this->published = $Published;
    }

    public function isPublished() 
    {
        return $this->published;
    }
}
