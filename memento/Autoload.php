<?php
function __autoload($class_name)
{
    $way = $class_name . '.php';

    if (is_file($way)) {
        include_once $way;
    }

}