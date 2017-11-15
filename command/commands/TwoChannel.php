<?php
namespace commands;
use bulb\Tv;

class TwoChannel  implements ICommand{
    private $tv;

    public function __construct(Tv $tv){
        $this->tv = $tv;
    }

    public function execute(){
        $this->tv->switchTwoСhannel();
    }
}