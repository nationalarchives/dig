<?php

namespace tna;

class Page
{
    public $app_name = 'Digital Interface for Government';
    public $department_name = 'Home Office';
    public $page_title = '';
    public $flash_message = '';
    public $flash_message_class = '';
    public $show_summary = false;

    /**
     * Page constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $reflection = new \ReflectionClass($this);

        foreach ($config as $property => $value) {
            $property = $reflection->getProperty($property);

            if ($property instanceof \ReflectionProperty) {
                $property->setValue($this, $value);
            }
        }
    }

    public function getPageInfo()
    {
        return get_object_vars($this);
    }

}