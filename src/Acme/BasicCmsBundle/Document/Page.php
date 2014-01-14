<?php

namespace Acme\BasicCmsBundle\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;
use Symfony\Cmf\Component\Routing\RouteReferrersReadInterface;
use Knp\Menu\NodeInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @PHPCR\Document(referenceable=true)
 */
class Page implements RouteReferrersReadInterface, NodeInterface
{
    use ContentTrait;

    public function __construct()
    {
        $this->children = new ArrayCollection();
    }

    public function getName()
    {
        return $this->title;
    }

    public function getOptions()
    {
        return array(
            'label' => $this->title,
            'content' => $this,

            'attributes'         => array(),
            'childrenAttributes' => array(),
            'displayChildren'    => true,
            'linkAttributes'     => array(),
            'labelAttributes'    => array(),
        );
    }
}
