<?php
namespace commands;
use bulb\Tv;


class OneChannel implements ICommand{
    private $tv;

    public function __construct(Tv $tv){
        $this->tv = $tv;
    }

    public function execute(){
        $this->tv->switchOneСhannel();
    }

}