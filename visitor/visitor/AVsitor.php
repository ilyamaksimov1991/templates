<?php
namespace visitor;
use visited\Irina;
use visited\Katya;
use visited\Ilya;

abstract class AVsitor
{
    abstract public function visitIrina(Irina $irina);

    abstract public function visitKatya(Katya $katya);

    abstract public function visitIlya(Ilya $ilya);
}