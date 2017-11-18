<?php
namespace flyweight;


class MazdaFlyweight
{
    public function __construct()
    {
        $this->name = 'Mazda';
        $this->speed = 210;
    }


    public function display($color)
    {
        $this->color = $color;
        echo $this->name . " у которой цвет " . $this->color . " и скорость " . $this->speed;
    }
}