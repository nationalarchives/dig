<?php

require __DIR__ . '/Page.php';

// Note:    this patten has dependency on Twig component registration

$app->get('/', function ($request, $response, $args) {

    $page = new \tna\Page();

    return $this->view->render($response, 'aggregate-transfers.html.twig', $page->getPageInfo());
})->setName('transfer-list');

$app->get('/transfer', function ($request, $response, $args) {

    $page = new \tna\Page();

    return $this->view->render($response, 'transfer-details.html.twig', $page->getPageInfo());
})->setName('summary');

$app->post('/transfer', function ($request, $response, $args) {

    // Instantiate Page object
    $page = new \tna\Page();

    return $this->view->render($response, 'message.html.twig', $page->getPageInfo());

})->setName('message');

$app->post('/metadata-upload', function ($request, $response, $args) {

    if (!empty($request->getParam('upload'))) {
        $page = new \tna\Page([
            'flash_message' => 'Metadata uploaded successfully',
            'flash_message_class' => 'success',
            'show_summary' => true
        ]);
    } else {
        $page = new \tna\Page([
            'flash_message' => 'Metadata empty',
            'flash_message_class' => 'danger'
        ]);
    }

    return $this->view->render($response, 'message.html.twig', $page->getPageInfo());
})->setName('metadata-upload');

$app->get('/search-results', function ($request, $response, $args) {

	$page = new \tna\Page();

	return $this->view->render($response, 'search-results.html.twig', $page->getPageInfo());
})->setName('search-results');