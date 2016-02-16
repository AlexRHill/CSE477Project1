<?php
/**
 * Created by PhpStorm.
 * User: nanliu
 * Date: 16/2/13
 * Time: PM4:41
 */

namespace Steampunked;


class SteampunkedController
{

    /**
     * Constructor
     * @param Steampunked $steampunked The Steampunked object
     * @param $post The $_POST array
     */
    public function __construct(Steampunked $steampunked, $post)
    {
        $this->steampunked = $steampunked;
        if(isset($post['giveup'])) {
            $this->reset = true;
            $this->page = "winning.php";
        } else if(isset($post['rotate'])) {
            $this->rotate();
        }
    }

    public function getPage() {
        return $this->page;
    }

    public function isReset() {
        return $this->reset;
    }

    public function rotate() {

    }


    private $steampunked;                // The Steampunked object we are controlling
    private $page = 'steampunked.php';     // The next page we will go to
    private $reset = false;         // True if we need to reset the game

}