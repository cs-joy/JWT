<?php

require __DIR__ . '/vendor/autoload.php';

use Firebase\JWT\CachedKeySet;
use Firebase\JWT\JWT;

// The URI for the JWKS you wish to cache the results from
$jwksUri = 'https://www.gstatic.com/iap/verify/public_key-jwk';
/*

// Create an HTTP client (can be any PSR-7 compatible HTTP client)
$httpClient = new GuzzleHttp\Client();

// Create an HTTP request factory (can be any PSR-17 compatible HTTP request factory)
$httpFactory = new GuzzleHttp\Psr\HttpFactory();

// Create a cache item pool (can be any PSR-6 compatible cache item pool)
$cacheItemPool = Phpfastcache\CacheManager::getInstance('files');

$keySet = new CachedKeySet(
    $jwksUri,
    $httpClient,
    $httpFactory,
    $cacheItemPool,
    null, // $expiresAfter int seconds to set the JWKS to expire
    true  // $rateLimit    true to enable rate limit of 10 RPS on lookup of invalid keys
);

$jwt = 'eyJhbGci...'; // Some JWT signed by a key from the $jwkUri above
$decoded = JWT::decode($jwt, $keySet);
*/

?>