<?php

define("APP_LIB", "/../lib/");

require_once(realpath(dirname(__FILE__) . APP_LIB . "Foo.php"));

class FugaTest extends PHPUnit_Framework_TestCase {

	public function setUp(){
		$this->foo = new Foo;
	}
	
    public function testHoge() {
        $this->assertEquals(2, 1 + 1);
    }

    public function testFuga() {
		$excepted = "elephant";
		$actual = $this->foo->mascot();
        $this->assertEquals($excepted, $actual);
    }
}

# phpunit tests/FugaTest.php
?>