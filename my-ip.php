<?php

use GuzzleHttp\Client;

require_once './vendor/autoload.php';

$url = 'https://api.myip.com';

// $client = new Client(['proxy' => 'http://spdic87cwa:dMr3apeDLw3wJw51bg@dc.smartproxy.com:10012']);
$client = new Client(['proxy' => 'http://spdic87cwa:dMr3apeDLw3wJw51bg@dc.smartproxy.com:10007']);
// $client = new Client();

$res = $client->get($url);

print_r($res->getBody()->getContents());
