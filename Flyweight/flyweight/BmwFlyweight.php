<?php
namespace flyweight;


class BmwFlyweight
{
    public $name = 'BMW';
    public $speed = 180;

    public function display($color)
    {
        $this->color = $color;
        echo $this->name . " у которой цвет " . $this->color . " и скорость " . $this->speed;
    }

}