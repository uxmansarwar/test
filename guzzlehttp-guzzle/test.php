<?php

use GuzzleHttp\Client;

require_once '../vendor/autoload.php';


$url = 'https://api.myip.com';
$url = 'http://localhost/api/test.php';
$url = 'localhost/api/test.php';
$url = 'http://instadownloader.com';
$url = 'http://api.com/test.php';

$client = new Client();
try {
    $response = $client->get($url);
    $body = $response->getBody();
    echo $body;
} catch (GuzzleHttp\Exception\ClientException $e) {
    echo 'Caught an exception: ' . $e->getMessage();
}
