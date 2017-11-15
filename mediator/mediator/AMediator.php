<?php

namespace mediator;

use colleague\AColleague;

abstract class AMediator
{
    abstract public function send($msg, AColleague $colleague);
}