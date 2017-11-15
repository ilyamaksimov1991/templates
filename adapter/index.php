<?php
include_once 'Autoload.php';


$adapterT = new AdapterTwiter();
$adapterF = new AdapterFacebook();

$adapterT->send();
$adapterF->send();
