<?php

$content = file_get_contents('finding-mid/found-in.json');

$content = json_decode($content, true);

$content = $content['text'];

file_put_contents('finding-mid/found-in.html', $content);
echo strlen($content);