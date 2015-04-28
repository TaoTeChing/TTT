<?php
$http = new swoole_http_server("0.0.0.0", 9502);

$http->on('request', function ($request, $response) {
    $response->header("Content-Type", "text/html; charset=utf-8");
    $response->end(file_get_contents(__DIR__.DIRECTORY_SEPARATOR."websock_c1.html"));
});



$http->start();