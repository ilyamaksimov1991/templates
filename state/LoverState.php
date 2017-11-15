<?php


class LoverState implements IState
{

    public function write($string)
    {
        return mb_strtolower($string);
    }
}