<?php
include "Autoload.php";
use \builder\ConcretBulderA;
use \builder\ConcretBulderB;

$builderA = new ConcretBulderA();
$builderB = new ConcretBulderB();

$foreman = new Foreman($builderA);
$foreman->Construct();

$foreman = new Foreman($builderB);
$foreman->Construct();


