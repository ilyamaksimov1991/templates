<?php
include_once 'Autoload.php';

use memento\Originator;

$Originator = new Originator();
$Originator->setState('maid');
$Originator->setState('maid1');
$Originator->setState('maid2');
$Originator->saveState();
$Originator->setState('maid3');
$Originator->setState('maid4');
$Originator->setState('maid5');
$Originator->saveState();
$Originator->setState('maid6');
$Originator->setState('maid7');
$Originator->setState('maid8');
$Originator->saveState();
$Originator->loadState(2);


