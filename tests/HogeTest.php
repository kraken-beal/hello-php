<?php

define("APP_LIB", "/../lib/");

require_once(realpath(dirname(__FILE__) . APP_LIB . "Foo.php"));

class HogeTest extends PHPUnit_Framework_TestCase {

	public function setUp(){
		$this->foo = new Foo;
	}
	
    public function testHoge() {
        $this->assertEquals(2, 1 + 1);
    }

    public function testFuga() {

		$actual = $this->foo->index();
        $this->assertTrue($actual);
    }
}

# phpunit tests/HogeTest.php
?>