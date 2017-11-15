<?php

class AddStrongDecoration extends Decorator
{

    public function getDecorator()
    {
        return '<strong>'.parent::getDecorator().'</strong>';
    }

}