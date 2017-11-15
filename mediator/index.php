<?php
include_once 'Autoload.php';
use mediator\Mediator;
use colleague\AColleague;
use colleague\ColleagueA;
use colleague\ColleagueB;
use colleague\ColleagueC;

$mediator = new Mediator();

$collegue1 = new ColleagueA($mediator);
$collegue2 = new ColleagueB($mediator);
$collegue3 = new ColleagueC($mediator);

$mediator->setColleague1($collegue1);
$mediator->setColleague2($collegue2);
$mediator->setColleague3($collegue3);

$collegue1->send('How are you ?');
$collegue2->send('Fine, thanks!');
$collegue2->send('Fine, thanks!');
