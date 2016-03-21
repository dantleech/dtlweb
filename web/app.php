<?php

use Symfony\Component\ClassLoader\ApcClassLoader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Symfony\Component\HttpKernel\HttpCache\HttpCache;
use DTL\Symfony\HttpCacheTagging\TaggingKernel;
use Doctrine\Common\Cache\PhpFileCache;
use DTL\Symfony\HttpCacheTagging\Storage\DoctrineCache;
use DTL\Symfony\HttpCacheTagging\Manager\TagManager;

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';
require_once __DIR__.'/../app/AppKernel.php';
$appKernel = new AppKernel('prod', false);
// $appKernel->loadClassCache(); // because I don't know why.

$store = new Store(__DIR__ . '/../app/cache/http_cache');
$tagStorage = new DoctrineCache(new PhpFileCache(__DIR__ . '/../app/cache/http_cache_tags'));
$tagManager = new TagManager($tagStorage, $store);
$appKernel->setTagManager($tagManager);
$kernel = new HttpCache($appKernel, $store, null, array('default_ttl' => (3600 * 24 * 60)));
$kernel = new TaggingKernel($kernel, $tagManager);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
