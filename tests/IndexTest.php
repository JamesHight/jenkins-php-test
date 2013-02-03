<?php 
require_once 'PHPUnit/Autoload.php';

class IndexClassTest extends PHPUnit_Framework_TestCase {

    function testHTML() {
        $this->expectOutputRegex("/Hello\s*/");
        require_once dirname(__FILE__) . '/../src/index.php';
    }

}