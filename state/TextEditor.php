<?php

class TextEditor
{
    private $obj_state;

    public function __construct(IState $obj_state)
    {
        $this->obj_state = $obj_state;
    }

    public function setState(IState $obj_state)
    {
        $this->obj_state = $obj_state;
    }

    public function editorState($string)
    {
       echo  $this->obj_state->write($string);
    }

}