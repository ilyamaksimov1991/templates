<?php


class StrongState implements IState
{

    public function write($string)
    {
        return '<strong>' . $string . '</strong>';
    }
}