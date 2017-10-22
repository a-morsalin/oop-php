<?php
$subjectArray = array("HTML","CSS","PHP","jQuery");
$subject = new ArrayIterator($subjectArray);
$limit = new LimitIterator($subject,0,2);
foreach($limit as $value){
	echo $value."<br/>";
}

 ?>