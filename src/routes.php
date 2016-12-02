<?php

// Note:    this patten has dependency on Twig component registration

$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'aggregate-transfers.html', [
        'app_name' => 'Digital Interface for Government',
        'department_name' => 'Home Office',
        'page_title' => 'Dashboard'
    ]);
})->setName('profile');