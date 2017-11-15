<?php
include "Autoload.php";
use figure\SquareFigure;
use figure\CircleFigure;
use line\StrongLine;
use line\DubleLine;
use color\BlueColor;
use color\RedColor;


echo  new SquareFigure(new BlueColor(), new StrongLine());
echo '<br>';
echo  new CircleFigure(new RedColor(), new StrongLine());
echo '<br>';
echo  new CircleFigure(new RedColor(), new DubleLine());
