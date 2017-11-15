<?php
namespace formatFileCreate;

class PhpFile implements IFile{

    public function createFile($name){
        return $name.'.php';
    }
}