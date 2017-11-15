<?php

class ButtonFactury{
	
	public static function createButton($btn){
		$baseClass ='Button';
		$nameClass= $baseClass.(ucfirst($btn));
		
		if (class_exists($nameClass)){
			return new $nameClass;
		}else{
			echo 'Не существует такого класса';
		}
	}
}