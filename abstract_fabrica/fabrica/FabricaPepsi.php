<?php
namespace fabrica;

use bottle\BottlePepsi;
use woter\WoterPepsi;

class FabricaPepsi extends AFabrica{
    public $woter;
    public $bottle;

    public function createProduct(){
        $this->woter= new WoterPepsi();
        $this->woter->HelloReturnWoter();
        $this->bottle= new BottlePepsi();
        $this->bottle->HelloReturnBottle();
    }
   
}