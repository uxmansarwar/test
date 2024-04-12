<?php

require_once '../vendor/autoload.php';



// Initialize the cache
use Phpfastcache\Helper\Psr16Adapter;

$cache = new Psr16Adapter('Files');

// Store data in the cache for 3600 seconds (1 hour)
// $cache->set('cache_key', 'cached data for', 3600);

var_dump($cache->get('cache_key'));
