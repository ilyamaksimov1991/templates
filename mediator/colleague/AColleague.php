<?php
namespace colleague;

use mediator\AMediator;

abstract class AColleague
{
    private $mediator;

    public function __construct(AMediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function send($msg)
    {
        $this->mediator->send($msg,$this);
    }

    abstract public function notify($msg);

}