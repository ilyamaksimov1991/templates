<?php
namespace visited;

use visitor\AVsitor;

class Irina extends AVisited
{
    public function souvenirCar()
    {
        echo 'Хочу машину BMW';
    }

    public function acceptVisitor(AVsitor $visitor)
    {
        $visitor->visitIrina($this);
    }
}