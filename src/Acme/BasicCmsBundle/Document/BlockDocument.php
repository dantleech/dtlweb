<?php

namespace Acme\BasicCmsBundle\Document;

class BlockDocument
{
    private $uuid;

    /**
     * @PHPCRODM\String()
     */
    private $name;

    private $content;
}
