<?php
namespace figure;

use color\IColor;
use line\Iline;

interface IFigure
{
    public function __construct(IColor $color, Iline $line);
    
}