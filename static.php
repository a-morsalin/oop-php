<?php

class User{
	
	static public $name = 'Emroze';
	
	static public function getName(){
		return self::$name = 'Nowroze';
	}
}
echo User::$name."<br/>";
echo User::getName()."<br/>";


class Register{
	
	public static $member = 0;
	public static function getCount(){
		return self::$member;
	}
	
	public function __construct(){
		self::$member++;
	}
}

$m1 = new Register();
$m2 = new Register();
$m3 = new Register();
$m4 = new Register();

echo Register::getCount();

class Event extends Register{
	
	public static  function getCount(){
		parent::getCount();
	}
}









 ?>

