<?php
namespace visited;
use visitor\AVsitor;

class Ilya extends AVisited
{
    public function souvenirHome()
    {
        echo 'Хочу свой дом';
    }

    public function acceptVisitor(AVsitor $visitor)
    {
        $visitor->visitIlya($this);
    }
}