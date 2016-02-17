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

		$steampunk = new Steampunked(self::SEED,10,10);

        $this->assertInstanceOf('Steampunked',$steampunk);


	}

    public function testGetters() {

        $steampunk = new Steampunked(self::SEED,12,10);


        $this->assertEquals(10,$steampunk->getHeight());
        $this->assertEquals(12,$steampunk->getWidth());

    }

    public function testTurns() {

        $steampunk = new Steampunked(self::SEED,10,10);

        //The game should start with Player 1's turn by default
        $this->assertEquals(1,$steampunk->getTurn());

        //Tests changing from turn 1 to turn 2
        $steampunk->nextTurn();
        $this->assertEquals(2,$steampunk->getTurn());

        //Tests changing from turn 2 to turn 1;
        $steampunk->nextTurn();
        $this->assertEquals(1,$steampunk->getTurn());


    }
}

/// @endcond
?>
