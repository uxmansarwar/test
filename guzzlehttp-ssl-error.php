<?php
require_once './vendor/autoload.php';
$username = 'uxmansarwar';
$url = 'https://api.myip.com';
$url = 'https://thriveglobal.com/';
$url = 'https://instagram.com/';
$url = 'https://www.instagram.com/' . $username;
$url = 'https://www.instagram.com/api/v1/users/web_profile_info/?username=' . $username;
$url = 'https://instagram.flhe13-1.fna.fbcdn.net/o1/v/t16/f1/m78/B94CB7247F20D41E86C742296134589B_video_dashinit.mp4?efg=eyJxZV9ncm91cHMiOiJbXCJpZ193ZWJfZGVsaXZlcnlfdnRzX290ZlwiXSIsInZlbmNvZGVfdGFnIjoidnRzX3ZvZF91cmxnZW4uc3RvcnkuYzIuNzIwLmJhc2VsaW5lIn0&_nc_ht=instagram.flhe13-1.fna.fbcdn.net&_nc_cat=101&vs=1960081031098080_774861463&_nc_vs=HBksFQIYUWlnX3hwdl9wbGFjZW1lbnRfcGVybWFuZW50X3YyL0I5NENCNzI0N0YyMEQ0MUU4NkM3NDIyOTYxMzQ1ODlCX3ZpZGVvX2Rhc2hpbml0Lm1wNBUAAsgBABUCGDpwYXNzdGhyb3VnaF9ldmVyc3RvcmUvR1BzWE5oUElvMVloV0ZVQkFEMmxGdWF4dC00QWJwUjFBQUFGFQICyAEAKAAYABsBiAd1c2Vfb2lsATEVAAAmltzFvJTJjEAVAigCQzMsF0Ax5qfvnbItGBJkYXNoX2Jhc2VsaW5lXzFfdjERAHXoBwA%3D&_nc_rid=27925f160c&ccb=9-4&oh=00_AfDPwg4Xp5_A1ZnI3thjTbhynkxV-TNc3eRcnxQNXcS39A&oe=66382164&_nc_sid=982cc7';


$cookieJar = new \GuzzleHttp\Cookie\CookieJar();
$opt = [
    \GuzzleHttp\RequestOptions::PROXY => 'https://spm5dyz830:8GY+elUQ4dcu1hd7he@dc.smartproxy.com:10077',
    \GuzzleHttp\RequestOptions::COOKIES => $cookieJar,
    \GuzzleHttp\RequestOptions::VERSION => '2.0',
    \GuzzleHttp\RequestOptions::DECODE_CONTENT => true,
    // \GuzzleHttp\RequestOptions::VERIFY => 'cacert-2024-03-11.pem',
    \GuzzleHttp\RequestOptions::ALLOW_REDIRECTS => [
        'max'             => 5,
        'strict'          => false,
        'referer'         => true,
        'protocols'       => ['http', 'https'],
        'track_redirects' => true
    ],
    \GuzzleHttp\RequestOptions::HEADERS => [
        'user-agent'  => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',
    ]
];


$client = new \GuzzleHttp\Client($opt);
$headers = [
    "accept" => "*/*",
    "X-Ig-App-Id" => "936619743392459",
    "Referer" => "https://www.instagram.com",
    "sec-ch-ua-platform" => "Windows",
    "sec-ch-ua-platform-version" => "10.0.0",
    "X-Requested-With" => "XMLHttpRequest",
    'Accept' => 'application/json',
];
$options = [
    // 'headers' => $headers
];
$html = [];
try {
    $req = $client->get($url, $options);
    $html['status'] = $req->getStatusCode();
    $html['header'] = $req->getHeaders();
    $html['content-len'] = strlen($req->getBody()->getContents());
} catch (\GuzzleHttp\Exception\RequestException $e) {
    $html['errors']['request_exception'] = $e->getMessage();
    if ($e->hasResponse()) {
        $response = $e->getResponse();
        $html['header'] = $response->getHeaders();
        $html['status'] = $response->getStatusCode();
        $html['content'] = (string)$response->getBody();
    }
} catch (\Exception $e) {
    $html['errors']['exception'] = $e->getMessage();
} finally {
}

print_r($html);
