<?php
include_once 'Autoload.php';

use visited\Irina;
use visited\Katya;
use visited\Ilya;
use visitor\SantaClaus;

$visitor = new SantaClaus();

$visited1 = new Ilya();
$visited1->acceptVisitor($visitor);

$visited2 = new Irina($visitor);
$visited2->acceptVisitor($visitor);

$visited3 = new Katya($visitor);
$visited3->acceptVisitor($visitor);






