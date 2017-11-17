<?php
namespace flyweight;


class MazdaFlyweight
{
    protected $name = 'Mazda';
    protected $speed = 210;

    public function display($color)
    {
        $this->color = $color;
        echo $this->name . " у которой цвет " . $this->color . " и скорость " . $this->speed;
    }
}