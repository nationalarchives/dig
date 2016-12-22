<?php

require __DIR__ . '/Page.php';

$app->get('/', function ($request, $response, $args) {
    $page = new \tna\Page(['page_title' => 'Transfers']);
    return $this->view->render($response, 'aggregate-transfers.html.twig', $page->getPageInfo());
})->setName('transfer-list');

$app->get('/transfer', function ($request, $response, $args) {
    $page = new \tna\Page(['page_title' => 'Transfer']);
    return $this->view->render($response, 'transfer-details.html.twig', $page->getPageInfo());
})->setName('summary');

$app->get('/register-collection', function ($request, $response, $args) {
    // Instantiate Page object
    $page = new \tna\Page(['page_title' => 'Register collection']);
    return $this->view->render($response, 'register-collection.html.twig', $page->getPageInfo());
})->setName('message');

$app->get('/metadata-upload', function ($request, $response, $args) {
    if (!empty($request->getParam('upload'))) {
        $page = new \tna\Page([
            'page_title' => 'Metadata uploaded successfully',
            'show_summary' => true
        ]);
        return $this->view->render($response, 'metadata-review.html.twig', $page->getPageInfo());
    } else {
        $page = new \tna\Page([
            'page_title' => 'Metadata validation failed',
        ]);
        return $this->view->render($response, 'metadata-validation-failed.html.twig', $page->getPageInfo());
    }
})->setName('metadata-upload');

$app->get('/metadata-submitted-ok', function ($request, $response, $args) {
    $page = new \tna\Page([
        'page_title' => 'Metadata uploaded successfully',
        'show_summary' => true,
        'uploaded' => true,
        'flash_message' => 'Metadata saved successfully. <a href=begin-transfer>View recommended transfer options</a>',
        'flash_message_class' => 'success'
    ]);
    return $this->view->render($response, 'message.html.twig', $page->getPageInfo());
})->setName('metadata-submitted-ok');

$app->get('/search-results', function ($request, $response, $args) {
    $page = new \tna\Page(['page_title' => 'Search results']);
    return $this->view->render($response, 'search-results.html.twig', $page->getPageInfo());
})->setName('search-results');

$app->get('/begin-transfer', function ($request, $response, $args) {
    $page = new \tna\Page([
        'page_title' => 'Begin transfer',
        'show_summary' => true,
        'begin_transfer' => true
    ]);
    return $this->view->render($response, 'transfer-details.html.twig', $page->getPageInfo());
});

$app->get('/request-hard-drive', function ($request, $response, $arg) {
    $page = new \tna\Page(['page_title' => 'Request Hard Drive']);
    return $this->view->render($response, 'request-hard-drive.html.twig', $page->getPageInfo());
});

$app->get('/record-preview', function ($request, $response, $args) {
    $page = new \tna\Page([
        'page_title' => 'Record preview',
        'show_summary' => true,
        'begin_transfer' => true
    ]);
    return $this->view->render($response, 'record-preview.html.twig', $page->getPageInfo());
});

$app->get('/upload', function ($request, $response, $args) {
    $page = new \tna\Page(['page_title' => 'Upload transfer']);
    return $this->view->render($response, 'upload.html.twig', $page->getPageInfo());
})->setName('upload');

$app->get('/introduction', function ($request, $response, $args) {
    $page = new \tna\Page(['page_title' => 'Introduction']);
    return $this->view->render($response, 'introduction.html.twig', $page->getPageInfo());
})->setName('intro');

$app->get('/diff', function ($request, $response, $args) {
    $page = new \tna\Page(['page_title' => 'Show differences']);
    return $this->view->render($response, 'diff.html.twig', $page->getPageInfo());
})->setName('diff');