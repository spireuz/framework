<?php

use Slim\Psr7\Request;
use Slim\Psr7\Response;

require_once __DIR__ . '/../vendor/autoload.php';

$app = require_once  __DIR__ . '/../src/app.php';

$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write('<h1>Hello from Spire Framework</h1>');
    return $response;
});

$app->run();