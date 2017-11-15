<?php
namespace builder;

use sectionHouse\footer\BasementBunker;
use sectionHouse\House;
use sectionHouse\roof\MultiRoof;
use sectionHouse\wall\BrickWall;


class ConcretBulderA extends Builder
{
    private $house;
    
    
    public function __construct()
    {
    $this->house= new House();
    }
    public function buildRoof()
    {
        $this->house->addParts(new MultiRoof());
    }

    public function buildWall()
    {
        $this->house->addParts(new BrickWall());
    }

    public function buildFooter()
    {
        $this->house->addParts(new BasementBunker() );
    }

    public function getResult()
    {
        return $this->house;
    }
}