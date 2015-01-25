<?php

namespace Acme\BasicCmsBundle\EventSubscriber;

use Acme\BasicCmsBundle\Document\TaggedInterface;
use FOS\HttpCacheBundle\CacheManager;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class KernelSubscriber implements EventSubscriberInterface
{
    private $cacheManager;

    public function __construct(CacheManager $cacheManager)
    {
        $this->cacheManager = $cacheManager;
    }
    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::RESPONSE => 'handleResponse',
        );
    }

    public function handleResponse(FilterResponseEvent $event)
    {
        $request = $event->getRequest();

        if (!$request->attributes->has('contentDocument')) {
            return;
        }

        $document = $request->get('contentDocument');

        if (!$document instanceof TaggedInterface) {
            return;
        }

        $this->cacheManager->tagResponse(
            $event->getResponse(),
            $document->getCacheTags()
        );
    }
}
