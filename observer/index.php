<?php
include_once 'Autoload.php';
use \observer\ObserverA;
use \observer\ObserverB;
use \observer\ObserverC;

$concretObservervable = new ConcretObservervable();
$observerA= new ObserverA();
$observerB= new ObserverB();
$observerC= new ObserverC();
$concretObservervable->addObserver($observerA);
$concretObservervable->addObserver($observerB);
$concretObservervable->addObserver($observerC);

$concretObservervable->setParams(34,760);

