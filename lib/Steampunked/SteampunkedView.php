<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 2/15/2016
 * Time: 11:29 PM
 */

namespace Steampunked;

/**
 * View class for the Steampunked game.
 */

class SteampunkedView
{
    /** Constructor
     * @param $steampunked Steampunked game object */
    public function __construct(Steampunked $steampunked) {
        $this->steampunked = $steampunked;
    }

    /**
     * Create the HTML for the game grid
     * @return string HTML for the game grid
     */
    public function gameGrid() {

    }

    /**
     * Create the HTML for the game buttons
     * @return string HTML for the game buttons
     */
    public function gameButtons() {

    }



    private $steampunked;

}