<?php

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');

$twig = new Twig_Environment($loader, array());

$template = $twig->load('aggregate-transfers.html');

echo $template->render([
    'app_name' => 'Digital Interface for Government',
    'department_name' => 'Home Office',
    'page_title' => 'Dashboard'
]);