<?php
namespace visitor;

use visited\Irina;
use visited\Katya;
use visited\Ilya;

class SantaClaus extends AVsitor
{
    public function visitIrina(Irina $irina)
    {
        return $irina->souvenirCar();
    }

    public function visitKatya(Katya $katya)
    {
        return $katya->souvenirDress();
    }

    public function visitIlya(Ilya $ilya)
    {
        return $ilya->souvenirHome();
    }
}