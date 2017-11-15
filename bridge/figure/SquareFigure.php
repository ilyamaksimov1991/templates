<?php

namespace figure;
use line\Iline;
use color\IColor;

class SquareFigure implements  IFigure
{
    private $color;
    private $line;

    public function __construct(IColor $color, Iline $line){
        $this->color = $color;
        $this->line = $line;
    }
    public function  __toString(){

        return 'фигура Квадрат  '. $this->color->getColor().' '.$this->line->getLine();
    }
}