<?php
namespace flyweightFactory;

use flyweight\BmwFlyweight;
use flyweight\MazdaFlyweight;
use flyweight\PorcheFlyweight;

class FlyweightFactory
{
    public $arrayCar = [];

    public function createProduct($key)
    {
        if (!array_key_exists($key, $this->arrayCar)) {

            switch ($key) {
                case 'Bmw':
                    $this->arrayCar['Bmw'] = new BmwFlyweight();
                    break;
                case 'Porche':
                    $this->arrayCar['Porche'] = new PorcheFlyweight();
                    break;
                case 'Mazda':
                    $this->arrayCar['Mazda'] = new MazdaFlyweight();
                    break;

            }
        }
            return $this->arrayCar[$key];

    }

}