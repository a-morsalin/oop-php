<?php
$subjectArray = array("HTML","CSS","PHP","jQuery");
$subject = new ArrayIterator($subjectArray);
$ci = new CachingIterator($subject);
foreach($ci as $value){
	echo $value;
	if($ci->hasNext()){
		echo ", ";
	}
}

 ?>