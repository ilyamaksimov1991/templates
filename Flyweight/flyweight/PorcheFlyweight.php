<?php
namespace flyweight;


class PorcheFlyweight extends AFlyweight
{
    public function __construct()
    {$this->name = 'Porche';
        $this->speed = 200;
        sleep(3);
    }
    public function display($color)
    {
        $this->color = $color;
        echo $this->name . " у которой цвет " . $this->color . " и скорость " . $this->speed;
    }
}