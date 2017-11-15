<?php
namespace visited;
use visitor\AVsitor;

class Katya extends AVisited
{
    public function souvenirDress()
    {
        echo 'Хочу Платье ';
    }

    public function acceptVisitor(AVsitor $visitor)
    {
        $visitor->visitKatya($this);
    }
}