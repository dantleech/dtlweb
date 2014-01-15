<?php

namespace Acme\BasicCmsBundle\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @PHPCR\Document()
 */
class Message
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
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * @PHPCR\String()
     * @Assert\Email()
     */
    protected $email;

    /**
     * @PHPCR\String()
     */
    protected $message;

    public function getName() 
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail() 
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMessage() 
    {
        return $this->message;
    }
    
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getParent() 
    {
        return $this->parent;
    }
    
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    public function getId() 
    {
        return $this->id;
    }
}
