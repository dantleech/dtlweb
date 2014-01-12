<?php

namespace Acme\BasicCmsBundle\Document;

use Ferrandini\Urlizer;
use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;

/**
 * @PHPCR\Document(referenceable=true)
 */
class Comment
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
     * @PHPCR\NodeName()
     */
    protected $name;

    /**
     * @PHPCR\String(nullable=true)
     */
    protected $author;

    /**
     * @PHPCR\String()
     */
    protected $title;

    /**
     * @PHPCR\String(nullable=true)
     */
    protected $email;

    /**
     * @PHPCR\String()
     */
    protected $comment;

    /**
     * @PHPCR\Date()
     */
    protected $createdAt;

    public function __construct()
    {
        $this->name = uniqid();
        $this->createdAt = new \DateTime();
    }

    public function getId() 
    {
        return $this->id;
    }
    

    public function getParent() 
    {
        return $this->parent;
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
    }

    public function getEmail() 
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getComment() 
    {
        return $this->comment;
    }
    
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getAuthor() 
    {
        return $this->author;
    }
    
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getCreatedAt() 
    {
        return $this->createdAt;
    }
    
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
    
}
