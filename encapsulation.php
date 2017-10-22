<?php

class Tv{
	protected $model;
	public $volume;
	
	public function voulmeUp(){
		$this->volume++;
	}
	public function voulmeDown(){
		$this->volume--;
	}
	
	public function __construct($m,$v){
		$this->model = $m;
		$this->volume = $v;
	}
	
	
	protected function getModel(){
		return $this->model;
	}
	
}

class LcdTv extends Tv {
	
	public function getModel(){
		return $this->model;
	}
	
}


$tv = new Tv("Samsung",6);
echo $tv->getModel()."<br/>";

$tv2 = new LcdTv("Sony",10);
echo $tv2->getModel();
 ?>

