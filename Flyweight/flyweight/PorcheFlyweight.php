<?php
namespace flyweight;


class PorcheFlyweight extends AFlyweight
{
    protected $name = 'Porche';
    protected $speed = 200;

    public function display($color)
    {
        $this->color = $color;
        echo $this->name . " у которой цвет " . $this->color . " и скорость " . $this->speed;
    }

}