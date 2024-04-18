<?php

$content = file_get_contents('.cache/www.instagram.com.har');
$content = json_decode($content, true);

$dir = ['.cache', 'header', 'request', 'cookie', 'response-cookie'];
foreach ($dir as $d)
    if (!file_exists($d) && !is_dir($d))
        mkdir($d);

$n_res_cookie = 0;
$n = 0;
foreach ($content as $k => $v)
    foreach ($v['entries'] as $key => $entry) {
        $url = parse_url($entry['request']['url']);
        $url = trim($url['host'], '/');
        $num = ++$n;
        $num = $num < 10 ? '0' . (string)$num : $num;

        $file_path = 'request/' . $num . '-' .  str_ireplace(['https://', 'http://', '/'], ['', '', '--'], $url) . '.php';
        file_put_contents($file_path, '<?php ' . PHP_EOL . 'return ' . var_export($entry, true));

        // if (empty(json_encode($entry, JSON_PRETTY_PRINT, 5)) || empty($entry)) {
        //     var_dump($entry);

        //     exit;
        // }

        $req = count($entry['request']['cookies']);
        $res = count($entry['response']['cookies']);
        if ($res < 10)
            $res = '0' . (string)$res;
        if ($req < 10)
            $req = '0' . (string)$req;

        $file_path = 'cookie/' . $num . '--req=' . $req . '--res=' . $res . '--' .  str_ireplace(['https://', 'http://', '/'], ['', '', '--'], $url);
        $file_path .= '.json';
        file_put_contents($file_path, json_encode(['request' => $entry['request']['cookies'], 'response' => $entry['response']['cookies']], JSON_PRETTY_PRINT, 5));


        if (count($entry['response']['cookies']) > 0) {
            $file_path = 'response-cookie/' . ++$n_res_cookie . '--req=' . $num . '--' .  str_ireplace(['https://', 'http://', '/'], ['', '', '--'], $url);
            $file_path .= '.json';
            file_put_contents($file_path, json_encode(['url' => $entry['request']['url'], 'request' => $entry['request']['cookies'], 'response' => $entry['response']['cookies']], JSON_PRETTY_PRINT, 5));
        }


        $file_path = 'header/' . $num . '-' .  str_ireplace(['https://', 'http://', '/'], ['', '', '--'], $url) . '.json';
        file_put_contents($file_path, json_encode(['url' => $entry['request']['url'], 'request' => $entry['request']['headers'], 'response' => $entry['response']['headers']], JSON_PRETTY_PRINT, 5));



        echo $file_path . PHP_EOL;
        // if ($n > 50)
        //     exit;
    }
