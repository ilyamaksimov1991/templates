<?php
namespace proxy;


class MathProxy implements IProxy
{
    private $parentObj;

    public function __construct()
    {
      //  $this->parentObj=null;
    }

    public function plus($x,$y)
    {
        return $x+$y;
    }

    public function minus($x,$y)
    {
        return $x-$y;
    }

    public function multiplication($x,$y)
    {
        $this->parentObj= new Math();
        return $this->parentObj->multiplication($x,$y);
    }

    public function divide($x,$y)
    {
        $this->parentObj= new Math();
        return $this->parentObj->divide($x,$y);
    }
}