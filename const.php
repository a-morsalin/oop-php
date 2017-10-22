<?php

class Circle{
	const PI = 3.1416;
	
	public function area($radius){
		return $radius*$radius*self::PI;
	}
}

$data1 = new Circle();
echo $data1->area(8)."<br/>";
echo $data1::area(3);


 ?>

