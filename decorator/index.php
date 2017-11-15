<?php
include "Autoload.php";

$obj= new AddStrongDecoration(new AddTextDecorator(new Hello()));
echo $obj->getDecorator();