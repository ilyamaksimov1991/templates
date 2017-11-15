<?php
namespace visited;
use visitor\AVsitor;

abstract class AVisited
{
    abstract public function acceptVisitor(AVsitor $visitor);
}