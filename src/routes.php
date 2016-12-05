<?php

require __DIR__ . '/Page.php';

// Note:    this patten has dependency on Twig component registration

$app->get('/', function ($request, $response, $args) {

    // Instantiate Page object
    $page = new \tna\Page();
    $page_info = $page->getPageInfo();

    return $this->view->render($response, 'aggregate-transfers.html', $page_info);
})->setName('profile');

$app->get('/transfer', function ($request, $response, $args) {

	// Instantiate Page object
	$page = new \tna\Page();
	$page_info = $page->getPageInfo();

	return $this->view->render($response, 'transfer-details.html', $page_info);
})->setName('detail');
