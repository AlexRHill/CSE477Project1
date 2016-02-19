<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 2/15/2016
 * Time: 11:28 PM
 */

namespace Steampunked;


class Steampunked
{

    public function __construct($seed = null){

    }

    //returns the width of the grid
    public function getWidth(){
        return $this->width;
    }

    //returns the height of the grid
    public function getHeight(){
        return $this->height;
    }

    //Returns the turn value
    public function getTurn(){
        return $this->turn;
    }

    //changes the turn from player 1 to 2 or vice versa
    public function nextTurn(){
       // if ($this->turn==1){
      //      $this->turn=2;
      //  } else{
      //      $this->turn=1;
      //  }

    }

    public function setSize($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    private $seed;
    private $width;
    private $height;
    private $turn=1;  //whose turn it is
}