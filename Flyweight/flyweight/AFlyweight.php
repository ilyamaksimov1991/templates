<?php
namespace flyweight;


abstract class AFlyweight
{
    protected  $name= 'BMW';
    protected  $speed=180;
    protected  $color;
    
    abstract public function display($color);
}