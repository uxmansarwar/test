<?php
require_once './vendor/autoload.php';

$url = 'http://143.198.76.160/request-headers.php';


$client = new \GuzzleHttp\Client([
    'proxy' => 'https://spm5dyz830:8GY+elUQ4dcu1hd7he@dc.smartproxy.com:10016',
    'headers' => [
        'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36'
    ]
]);

$res = $client->get($url);

print_r(json_decode($res->getBody()->getContents(), true));
