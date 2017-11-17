<?php

namespace proxy;


class Math implements IProxy
{
    public function __construct()
    {
        echo 'Создался реальный объект';
        sleep(3);
    }

    public function plus($x,$y)
    {
        return $x+$y;
    }

    public function minus($x,$y)
    {
        return $x-$y;
    }

    public function multiplication($x,$y)
    {
        return $x*$y;
    }

    public function divide($x,$y)
    {
        return $x/$y;
    }
}