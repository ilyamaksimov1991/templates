<?php
namespace templatemethod;
use \templatemethod\ATemplateMethod;

class HomeA extends ATemplateMethod{
    public function createRoof(){
        echo 'Крыша дома A <br>';
    }
    
    public function createWall(){
        echo 'Стена дома A <br>';
    }
    
    public function createFooter(){
        echo ' Фундамент дома A <br>';
    }
}