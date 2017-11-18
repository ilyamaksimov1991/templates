<?php
namespace flyweight;
class BmwFlyweight
{
    public function __construct()
    {$this->name = 'BMW';
        $this->speed = 180;
        sleep(3);
    }
    public function display($color)
    {
        $this->color = $color;
        echo $this->name . " у которой цвет " . $this->color . " и скорость " . $this->speed;
    }

}