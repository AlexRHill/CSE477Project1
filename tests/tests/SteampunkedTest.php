<?php


require __DIR__ . "/../../vendor/autoload.php";

use Steampunked\Steampunked as Steampunked;

/** @file
 * @brief Unit tests for the class Steampunked
 * @cond
 */
class SteampunkedTest extends \PHPUnit_Framework_TestCase
{

    const SEED = 1234;

	public function testConstructor() {

		$steampunked = new Steampunked(self::SEED);

        $steampunked->setSize(10,10);

        $this->assertInstanceOf('Steampunked',$steampunked);


	}

    public function testGetters() {

        $steampunked = new Steampunked(self::SEED);

        $steampunked->setSize(10,10);


        $this->assertEquals(10,$steampunked->getHeight());
        $this->assertEquals(10,$steampunked->getWidth());

    }

    public function testTurns() {

        $steampunked = new Steampunked(self::SEED);
        $steampunked->setSize(10,10);

        //The game should start with Player 1's turn by default
        $this->assertEquals(1,$steampunked->getTurn());

        //Tests changing from turn 1 to turn 2
        $steampunked->nextTurn();
        $this->assertEquals(2,$steampunked->getTurn());

        //Tests changing from turn 2 to turn 1;
        $steampunked->nextTurn();
        $this->assertEquals(1,$steampunked->getTurn());

    }
}

/// @endcond
?>
