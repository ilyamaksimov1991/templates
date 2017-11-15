<?php
namespace memento;
use memento\Memento;
class Originator
{
    private $state;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function saveState()
    {
        Caretaker::addMemento($this->state);
    }
    public function loadState($index)
    {
       echo Caretaker::getMemento($index);
    }


}