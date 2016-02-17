<?php

require __DIR__ . "/../../vendor/autoload.php";

use Steampunked\Steampunked as Steampunked;
use Steampunked\SteampunkedView as SteampunkedView;

/** @file
 * @brief Unit tests for the class SteampunkedView
 * @cond
 */
class SteampunkedViewTest extends \PHPUnit_Framework_TestCase
{
	const SEED = 1234;

	public function test_construct() {
		$steampunked = new Steampunked(self::SEED);
		$steampunked->setSize(6,6);

		$this->assertEquals(6, $steampunked->getHeight());
		$this->assertEquals(6, $steampunked->getWidth());

		$steampunkedView = new SteampunkedView($steampunked);

		$this->assertContains('<div class="game"><div class="row">', $steampunkedView->gameGrid());

		$this->assertContains('<img src="images/valve-closed.png">', $steampunkedView->gameGrid());

		$this->assertContains('', $steampunkedView->gameGrid());

		$this->assertContains('<input type=\"submit\" name=\"rotate\" id=\"rotate\" value=\"Rotate\">', $steampunkedView->gameButtons());
		$this->assertContains('<input type="submit" name="discard" id="discard" value="Discard">', $steampunkedView->gameButtons());
		$this->assertContains('<input type="submit" name="openValve" id="openValve" value="Open Valve">', $steampunkedView->gameButtons());
		$this->assertContains('<input type="submit" name="giveUp" id="giveUp" value="Give Up">', $steampunkedView->gameButtons());

	}
}

/// @endcond
?>
