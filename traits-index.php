<?php
include "traits-mobile.php";
include "traits-laser.php";
include "traits-projector.php";

class Android extends Mobile{
	public $name = 'HTC'.'<br/>';
	use Laser,Projector{
		Laser::battery insteadof Projector; //  use laser battery
		Projector::battery as p_power; // also use projector battery
	}
	
	public function size(){
		echo "The mobile size is 10mm"."<br/>";
	}
}

$obj = new Android();
echo $obj->name;
$obj->battery();
$obj->power();
$obj->p_power();
$obj->rangeDisplay();
$obj->size();


#function can call
#--------------------
#inside current class
#trait
#sub trait 
#we can use trait under trait
#can call abastract method from trait 

 ?>

