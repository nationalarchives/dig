<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');

$app = new \Slim\App;

require __DIR__ . '/src/twig-component-registration.php';

require __DIR__ . '/src/routes.php';

// Run app
$app->run();