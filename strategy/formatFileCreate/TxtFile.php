<?php
namespace formatFileCreate;

class TxtFile implements IFile{

    public function createFile($name){
        return $name.'.txt';
    }
}