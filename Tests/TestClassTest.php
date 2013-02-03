<?php 
require_once 'PHPUnit/Autoload.php';
require_once dirname(__FILE__) . '/../TestClass.php';

class TestClassTest extends PHPUnit_Framework_TestCase {

	var $testClass;

	function setUp() {
        $this->testClass = new TestClass();
    }

    function tearDown() {
        unset($this->testClass);
    }

    function testHello() {
        $this->assertEquals($this->testClass->hello(), "Hello\n");
    }

}