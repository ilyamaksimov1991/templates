<?php

abstract class abstractButton{
	
	protected $html;
	
	public function getHtml(){
		echo $this->html;
	}
}