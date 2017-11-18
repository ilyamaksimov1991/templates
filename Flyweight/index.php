<?php
include_once 'Autoload.php';
use flyweightFactory\FlyweightFactory;

$factory = new FlyweightFactory();

$car1 = $factory->createProduct('Bmw');
$car1->display('red');

$car1 = $factory->createProduct('Porche');
$car1->display('red');

$car1 = $factory->createProduct('Porche');
$car1->display('yellow');

$car1 = $factory->createProduct('Mazda');
$car1->display('green');

$car1 = $factory->createProduct('Bmw');
$car1->display('blue');




