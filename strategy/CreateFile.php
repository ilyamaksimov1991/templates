<?php

class CreateFile
{
    private $name_file;

    public function __construct($name_file)
    {
        $this->name_file = $name_file;
    }
    
    public function getFile($name)
    {
       return $this->name_file->createFile($name);
    }
}