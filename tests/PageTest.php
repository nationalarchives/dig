<?php

require dirname(__DIR__) . '/src/Page.php';

class PageTest extends PHPUnit_Framework_TestCase
{
    public function testSetsPageWithConstructor()
    {
        $page = new tna\Page();
        $this->assertInstanceOf('tna\Page', $page);
    }

    public function testPageHasRequiredTopLevelProperties()
    {
        $page = new tna\Page();
        $this->assertObjectHasAttribute('app_name', $page, '$page object has app_name attribute');
        $this->assertObjectHasAttribute('department_name', $page, '$page object has department_name attribute');
        $this->assertObjectHasAttribute('page_title', $page, '$page object has page_title attribute');
        $this->assertObjectHasAttribute('show_summary', $page, '$page object has show_summary attribute');
    }

    public function testConstructorSetsAttributes()
    {
        $config = [
            'app_name' => 'Test app name',
            'department_name' => 'Test department name',
            'page_title' => 'Test pag title',
            'show_summary' => true
        ];

        $page = new tna\Page($config);

        foreach (get_object_vars($page) as $key => $value) {
            // ReflectionClass is used to report information about $page
            $reflection = new \ReflectionClass($page);
            // Here we use the reflection object to obtain the property value using $key from $config
            $property = $reflection->getProperty($key)->getValue($page);
            // This allows us to compare the object property value with the $value
            $this->assertEquals($property, $value, "$key is the same as $property");
        }
    }

    public function testGetPageInfo()
    {
        $page = new tna\Page();
        // get_object_vars returns an array of all accessible and non-static members
        foreach (get_object_vars($page) as $key => $value) {
            // We then check that all members are represented in the array that is returned by $page->getPageInfo()
            $this->assertArrayHasKey($key, $page->getPageInfo(), sprintf('$page->getPageInfo() returns an array with an %s attribute', $key));
        }
    }
}
