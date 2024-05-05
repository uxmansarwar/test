<?php

function parseUrlComponents($url)
{
    $parsed_url = parse_url($url);

    // Extracting domain
    $domain = $parsed_url['host'];

    // Extracting path
    $path = $parsed_url['path'];

    // Extracting file name
    $file_name = basename($path);

    // Extracting file extension
    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

    // Extracting query parameters
    parse_str($parsed_url['query'], $query_params);

    return [
        'domain' => $domain,
        'path' => $path,
        'file_name' => $file_name,
        'file_extension' => $file_extension,
        'query_params' => $query_params
    ];
}

$url = "https://instagram.flhe13-1.fna.fbcdn.net/v/t51.29350-15/441327425_738772768134620_1882834301686612181_n.heic?stp=dst-jpg_e35&efg=eyJ2ZW5jb2RlX3RhZyI6ImltYWdlX3VybGdlbi4xMDgweDE5MjAuc2RyLmYyOTM1MCJ9&_nc_ht=instagram.flhe13-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=K1AQPCbNqgMQ7kNvgFtNjBn&edm=ANmP7GQBAAAA&ccb=7-5&ig_cache_key=MzM2MDM0OTE3Mzc4MzMzMzYwNA%3D%3D.2-ccb7-5&oh=00_AfAO6XT7hPmOEX0HPb2cN30ZT5yf-bjTcDJiJfdjbB5zGA&oe=66380D90&_nc_sid=982cc7";
$parsed_data = parseUrlComponents($url);

print_r($parsed_data);
