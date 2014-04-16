<?php

namespace Acme\BasicCmsBundle\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;

/**
 * @PHPCR\Document()
 */
class Site
{
    /**
     * @PHPCR\Id()
     */
    protected $id;

    /**
     * @PHPCR\ReferenceOne(targetDocument="Acme\BasicCmsBundle\Document\Page")
     */
    protected $homepage;

    /**
     * @PHPCR\String()
     */
    protected $contactEmail;

    public function getHomepage()
    {
        return $this->homepage;
    }

    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;
    }

    public function getContactEmail() 
    {
        return $this->contactEmail;
    }
    
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    }
    
}
