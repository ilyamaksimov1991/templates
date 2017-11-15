<?php


class AddTextDecorator extends Decorator
{

    public function getDecorator()
    {
       return parent::getDecorator() . ' word';
    }
}