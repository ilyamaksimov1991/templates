<?php
namespace formatFileCreate;

class PdfFile implements IFile{

    public function createFile($name){
        return $name.'.pdf';
    }
}