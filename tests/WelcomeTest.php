<?php

class WelcomeTest extends PHPUnit_Framework_TestCase {
	private $CI;

	public function setUp() {
		$this->CI = Welcome::get_instance();
	}

	public function testGetWelcome() {
		$welcome = $this->CI->index();
	}
}
?>
