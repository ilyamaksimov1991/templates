<?php
namespace fabrica;

use config\Config;

abstract class AFabrica
{
    public static function selectFabrica()
    {
        if (Config::FABRICA == 2) {
            return new FabricaPepsi();
        } else {
            return new FabricaCocaCola();
        }
    }
    abstract public function createProduct();
}