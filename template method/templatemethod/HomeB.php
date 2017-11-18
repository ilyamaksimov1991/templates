<?php
namespace templatemethod;
use \templatemethod\ATemplateMethod;

class HomeB extends ATemplateMethod{
    public function createRoof(){
        echo 'Крыша дома B <br>';
    }

    public function createWall(){
        echo 'Стена дома B <br>';
    }

    public function createFooter(){
        echo ' Фундамент дома B <br>';
    }
}