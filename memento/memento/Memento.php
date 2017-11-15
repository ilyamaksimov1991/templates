<?php
namespace memento;

class Memento
{
    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    public function getMementoState()
    {
        return $this->state;
    }
}