<?php
namespace builder;

use sectionHouse\footer\BasementSwimming;
use sectionHouse\House;
use sectionHouse\roof\MonoRoof;
use sectionHouse\wall\WoodenWall;


class ConcretBulderB extends Builder
{
    private $house;
    
    
    public function __construct()
    {
    $this->house= new House();
    }
    public function buildRoof()
    {
        $this->house->addParts(new MonoRoof());
    }

    public function buildWall()
    {
        $this->house->addParts(new WoodenWall());
    }

    public function buildFooter()
    {
        $this->house->addParts(new BasementSwimming());
    }

    public function getResult()
    {
        return $this->house;
    }
}