<?php

require dirname(__DIR__) . '/src/Example.php';

class ExampleTest extends PHPUnit_Framework_TestCase
{
    public function testSetsDoctorWithConstructor()
    {
        $example = new Example();
        $this->assertInstanceOf('Example', $example);
    }
}
