<?php
use \formatFileCreate\PdfFile;
use \formatFileCreate\PhpFile;
use \formatFileCreate\TxtFile;

include_once 'Autoload.php';

$file = new CreateFile(new PdfFile);
echo $file->getFile('index');

$file = new CreateFile(new PhpFile);
echo $file->getFile('index');

$file = new CreateFile(new TxtFile);
echo $file->getFile('index');