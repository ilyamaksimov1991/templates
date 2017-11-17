<?php
include_once 'Autoload.php';

use proxy\MathProxy;


$matshProxy = new MathProxy();
echo $matshProxy->plus(9,5);
echo $matshProxy->minus(3,2);
echo $matshProxy->multiplication(3,3);