<?php

trait Laser{
	public function power(){
		echo "10 mW"."<br/>";
	}
	public function battery(){
		echo "This is laser battery"."<br/>";
	}
	
	abstract function size();
}


 ?>

