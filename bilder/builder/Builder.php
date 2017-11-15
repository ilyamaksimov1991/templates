<?php


namespace builder;


abstract class Builder
{
   abstract public function buildRoof();
   abstract public function buildWall();
   abstract public function buildFooter();
   abstract public function getResult();
}