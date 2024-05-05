<?php

use GuzzleHttp\Client;

require_once './vendor/autoload.php';

$url = 'https://api.myip.com';

$port = readline();

// $client = new Client(['proxy' => 'http://spdic87cwa:dMr3apeDLw3wJw51bg@dc.smartproxy.com:10012']);
// $client = new Client(['proxy' => 'https://spm5dyz830:8GY+elUQ4dcu1hd7he@dc.smartproxy.com:10016']);
$client = new Client(['proxy' => 'https://spm5dyz830:8GY+elUQ4dcu1hd7he@dc.smartproxy.com:100' . $port]);
// $client = new Client();

$res = $client->get($url);

print_r($res->getBody()->getContents());
