<?php

use Symfony\Component\ClassLoader\ApcClassLoader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Symfony\Component\HttpKernel\HttpCache\HttpCache;
use DTL\TaggedHttpCache\TaggedCache;
use DTL\TaggedHttpCache\TagManager;

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';

// Use APC for autoloading to improve performance.
// Change 'sf2' to a unique prefix in order to prevent cache key conflicts
// with other applications also using APC.
/*
$apcLoader = new ApcClassLoader('sf2', $loader);
$loader->unregister();
$apcLoader->register(true);
*/

require_once __DIR__.'/../app/AppKernel.php';
require_once __DIR__.'/../app/AppCache.php';

$store = new Store(__DIR__ . '/../app/cache/http_cache');
$tagManager = new TagManager($store, __DIR__ . '/../app/cache/http_cache_tags');
$appKernel = new AppKernel('prod', false, $tagManager);
$appKernel->loadClassCache();
$kernel = new HttpCache($appKernel, $store);
$kernel = new TaggedCache($kernel, $tagManager);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
