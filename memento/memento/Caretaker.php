<?php
namespace memento;

use memento\Memento;

class Caretaker
{
    private static $stateList = [];

    public static function addMemento($state)
    {
        self::$stateList[] = new Memento($state);
    }
    public static function getMemento($index)
    {
       return self::$stateList[$index]->getMementoState();
    }

}