<?php
include_once 'Autoload.php';

use account\Bank;
use account\Bitcoin;
use account\Paypal;

$bank = new Bank(100);
$paypal = new Paypal(200);
$bitcoin = new Bitcoin(300);

$bank->nextObject($paypal);
$paypal->nextObject($bitcoin);

$bank->pay(10);
echo '<br><br>';
$bank->pay(210);
echo '<br><br>';
$bank->pay(310);