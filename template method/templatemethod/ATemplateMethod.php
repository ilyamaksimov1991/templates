<?php
namespace templatemethod;

abstract class ATemplateMethod{
    public function createHome()
    {
        $this->createFooter();
        $this->createRoof();
        $this->createWall();
    }
    
   abstract public function createRoof();
   abstract public function createWall();
   abstract public function createFooter();
}