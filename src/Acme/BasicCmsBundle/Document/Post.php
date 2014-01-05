<?php

namespace Acme\BasicCmsBundle\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;
use Symfony\Cmf\Component\Routing\RouteReferrersReadInterface;
use DTL\PhpcrTaxonomyBundle\Metadata\Annotations as PhpcrTaxonomy;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @PHPCR\Document(referenceable=true)
 */
class Post implements RouteReferrersReadInterface
{
    use ContentTrait;

    /**
     * @PHPCR\Date()
     */
    protected $date;

    /**
     * @PhpcrTaxonomy\Taxons(path="/cms/tags")
     */
    protected $tags;

    /**
     * @PhpcrTaxonomy\TaxonObjects()
     */
    protected $tagObjects;

    public function __construct()
    {
        $this->tagObjects = new ArrayCollection();
    }

    /**
     * @PHPCR\PrePersist()
     */
    public function updateDate()
    {
        if (!$this->date) {
            $this->date = new \DateTime();
        }
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    public function getTags() 
    {
        return $this->tags;
    }
    
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    public function getTagObjects() 
    {
        return $this->tagObjects;
    }
    
    public function setTagObjects($tagObjects)
    {
        $this->tagObjects = $tagObjects;
    }
}


