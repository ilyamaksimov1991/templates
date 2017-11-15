<?php
namespace fabrica;

use bottle\BottleCocaCola;
use woter\WoterCocaCola;

class FabricaCocaCola extends AFabrica{
    
    public $woter;
    public $bottle;

    public function createProduct(){
        $this->woter= new WoterCocaCola();
        $this->woter->HelloReturnWoter();
        $this->bottle= new BottleCocaCola();
        $this->bottle->HelloReturnBottle();
    }
}