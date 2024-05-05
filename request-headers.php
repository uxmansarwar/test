<?php

$data = [
    'request-headers' => getallheaders(),
    '$_SERVER' => $_SERVER
];

header('Content-Type: Application/json');
echo json_encode($data);
