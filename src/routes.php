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

    $page = new \tna\Page();

    $page_info = $page->getPageInfo();

    $upload = $request->getParam('upload');

    if (!empty($upload)) {
        $page_info['flash_message'] = 'Metadata uploaded successfully!';
        $page_info['message_class'] = 'success';
        $page_info['show_summary'] = true;
    } else {
        $page_info['flash_message'] = 'Metadata empty';
        $page_info['message_class'] = 'danger';
    }

    return $this->view->render($response, 'message.html.twig', $page_info);
})->setName('metadata-upload');
