<?php
class UpperState implements IState
{

    public function write($string)
    {
        return mb_strtoupper($string);
    }
}