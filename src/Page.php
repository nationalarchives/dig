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
    public $begin_transfer = false;
    public $uploaded = false;

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
        $properties_as_array = get_object_vars($this);
        $properties_as_array['properties_as_json'] = json_encode($properties_as_array);

        return $properties_as_array;
    }
}