<?php

abstract class Decorator
{
    protected $class;

    public function __construct($object)
    {
        $this->class = $object;
    }
    
    protected function getDecorator(){
        $obj = $this->class;
       return $obj->getDecorator();
    }
}