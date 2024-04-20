<?php

use voku\helper\HtmlDomParser;

require_once './vendor/autoload.php';

$entry = file_get_contents('request/01-www.instagram.com.json');
$entry = json_decode($entry, true);

$html = $entry['response']['content']['text'];

$dom = HtmlDomParser::str_get_html($html);
$script = $dom->find('script');
$js_cookie = [];
$n = 0;
foreach ($script as $e) {
    $txt = $e->innertext;
    if (empty($txt) || strtolower($e->type) != 'application/json')
        continue;

    if (strpos($txt, '17841465796458670') && strpos($txt, '7359905759063011618')) {
        echo ++$n . PHP_EOL;
        file_put_contents('find-body/' . $n . '.json', $txt);
        // break;
    }

    // sleep(1);
}
exit;
