<?php

require __DIR__ . '/Page.php';

// Note:    this patten has dependency on Twig component registration

$app->get('/', function ($request, $response, $args) {

    $page = new \tna\Page();
    $page_info = $page->getPageInfo();

    return $this->view->render($response, 'aggregate-transfers.html', $page_info);
})->setName('transfer-list');

$app->get('/transfer', function ($request, $response, $args) {

    $page = new \tna\Page();
    $page_info = $page->getPageInfo();

    return $this->view->render($response, 'transfer-details.html', $page_info);
})->setName('detail');

$app->post('/metadata-upload', function ($request, $response, $args) {

    $page = new \tna\Page();
    $page_info = $page->getPageInfo();

    $upload = $request->getParam('upload');

    if (!empty($upload)) {
        $page_info['flash_message'] = 'Metadata uploaded successfully!';
        $page_info['message_class'] = 'success';
    }
    if (empty($upload)) {
        $page_info['flash_message'] = 'Metadata empty';
        $page_info['message_class'] = 'danger';
    }

    return $this->view->render($response, 'message.html', $page_info);
})->setName('metadata-upload');