<?php

namespace tna;

class Page
{

    /**
     * @var array representing data at the application level
     */
    private $page_info = [
        'app_name' => 'Digital Interface for Government',
        'department_name' => 'Home Office',
        'page_title' => 'Dashboard',
	    'flash_message' => false
    ];

    /**
     * @return array
     */
    public function getPageInfo()
    {
        return $this->page_info;
    }

}