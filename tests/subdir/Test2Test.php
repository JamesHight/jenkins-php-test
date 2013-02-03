<?php 
require_once 'PHPUnit/Autoload.php';

class Test2Test extends PHPUnit_Framework_TestCase {
    function testHello() {
        $this->assertEquals(1, 2);
    }

}