<?php

namespace Aspick\ImageChecker\Tests;

class PngCheckerTest extends \PHPUnit_Framework_TestCase
{

	public function assets_dir() {
		return __DIR__.'/../../assets';
	}

	public function test_true_when_valid_png(){
		$result = \Aspick\ImageChecker\PngChecker::check($this->assets_dir(). '/valid.png');
		$this->assertTrue($result);
	}

	public function test_false_when_valid_jpg(){
		$result = \Aspick\ImageChecker\PngChecker::check($this->assets_dir(). '/valid.jpg');
		$this->assertFalse($result);
	}

	public function test_false_when_invalid_png(){
		$result = \Aspick\ImageChecker\PngChecker::check($this->assets_dir(). '/invalid.png');
		$this->assertFalse($result);
	}
}
