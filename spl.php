<?php
$subjectArray = array("HTML","CSS","PHP","jQuery");
$subject = new ArrayIterator($subjectArray);

foreach($subject as $value){
	echo $value."<br/>";
}

 ?>