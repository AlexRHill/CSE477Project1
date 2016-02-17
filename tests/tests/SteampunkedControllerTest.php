<?php

require __DIR__ . "/../../vendor/autoload.php";

use Steampunked\Steampunked as Steampunked;
use Steampunked\SteampunkedController as SteampunkedController;

/** @file
 * @brief Unit tests for the class SteampunkedController
 * @cond
 */
class SteampunkedControllerTest extends \PHPUnit_Framework_TestCase
{
	const SEED = 1234;

	public function test_construct() {
		//test instance
		$steampunked = new Steampunked(self::SEED);
		$controller = new SteampunkedController($steampunked, array());
		$this->assertInstanceOf('Steampunked\SteampunkedController', $controller);

		//test give up
		$steampunked = new Steampunked(self::SEED);
		$controller = new SteampunkedController($steampunked, array('giveup' => 'Give Up'));
		$this->assertTrue($controller->isReset());
		$this->assertEquals('winning.php', $controller->getPage());

		//test rotate
		$steampunked = new Steampunked(self::SEED);
		$controller = new SteampunkedController($steampunked, array('rotate' => 'Rotate'));
		$this->assertFalse($controller->isReset());
		$this->assertEquals('steampunked.php', $controller->getPage());

		//test discard
		$steampunked = new Steampunked(self::SEED);
		$controller = new SteampunkedController($steampunked, array('discard' => 'Discard'));
		$this->assertFalse($controller->isReset());
		$this->assertEquals('steampunked.php', $controller->getPage());

		//test open valve
		$steampunked = new Steampunked(self::SEED);
		$controller = new SteampunkedController($steampunked, array('openvalve' => 'Open Valve'));
		$this->assertFalse($controller->isReset());
		$this->assertEquals('winning.php', $controller->getPage());


	}




}

/// @endcond
?>
