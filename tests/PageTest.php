<?php

require dirname(__DIR__) . '/src/Page.php';

class PageTest extends PHPUnit_Framework_TestCase
{
    public function testSetsPageWithConstructor()
    {
        $page = new tna\Page();
        $this->assertInstanceOf('tna\Page', $page);
    }

    public function testPageHasRequiredProperties()
    {
        $page = new tna\Page();
        $this->assertObjectHasAttribute('page_info', $page, '$page object has page_info attribute');

        $expected_keys = [
            'app_name',
            'department_name',
            'page_title',
            'flash_message',
            'flash_message_class',
            'show_summary'
        ];

        foreach ($expected_keys as $i) {
            $this->assertArrayHasKey($i, $page->getPageInfo(), sprintf('$page->getPageInfo() returns an array with an %s attribute', $i));
        }

    }
}
