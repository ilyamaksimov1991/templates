<?php
use commands\OneChannel;
use commands\ThreeChannel;
use commands\TwoChannel;
use invoker\Pult;
use bulb\Tv;

include_once 'Autoload.php';

$command = new OneChannel(new Tv());
$command1 = new TwoChannel(new Tv());
$command2 = new ThreeChannel(new Tv());

$pult = new Pult($command);echo '<br>';
Pult::UndoСhannel();echo '<br>';
$pult = new Pult($command1);echo '<br>';

$pult = new Pult($command2);echo '<br>';
