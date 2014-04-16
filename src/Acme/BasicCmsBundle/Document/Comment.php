<?php

namespace Acme\BasicCmsBundle\Document;

use Ferrandini\Urlizer;
use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @PHPCR\String(nullable=true)
     * @Assert\Email()
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

    protected $expression;

    protected $expressionVars = array();

    protected $expressionAnswer;

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

    public function getIAmNotSpam() 
    {
        return $this->iAmNotSpam;
    }
    
    public function setIAmNotSpam($iAmNotSpam)
    {
        $this->iAmNotSpam = $iAmNotSpam;
    }

    public function getExpression() 
    {
        return $this->expression;
    }
    
    public function setExpression($expression)
    {
        $this->expression = $expression;
    }

    public function getExpressionVars() 
    {
        return $this->expressionVars;
    }
    
    public function setExpressionVars($expressionVars)
    {
        $this->expressionVars = $expressionVars;
    }

    public function getExpressionAnswer() 
    {
        return $this->expressionAnswer;
    }
    
    public function setExpressionAnswer($expressionAnswer)
    {
        $this->expressionAnswer = $expressionAnswer;
    }
    
}
