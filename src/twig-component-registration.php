<?php

// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {

    $view = new \Slim\Views\Twig('templates', [
        'cache' => false
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};