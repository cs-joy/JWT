<?php

require __DIR__ . '/vendor/autoload.php';

use Firebase\JWT\JWK;
use Firebase\JWT\JWT;

// Set of keys. The "keys" key is required. For example, the JSON response to
// this endpoint: https://www.gstatic.com/iap/verify/public_key-jwk
$jwks = ['keys' => []];
// JWK::parseKeySet($jwks) returns an associative array of **kid** to Firebase\JWT\Key
// objects. Pass this as the second parameter to JWT::decode.
JWT::decode($payload, JWK::parseKeySet($jwks));

?>