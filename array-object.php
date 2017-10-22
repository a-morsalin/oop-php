<?php
$subjectArray = array("HTML","CSS","PHP","jQuery");
$subject = new ArrayObject($subjectArray);
$subject->append("javaScript");
$iterator = $subject->getIterator();
while($iterator->valid()){
	echo $iterator->current()."<br/>";
	$iterator->next();
}

 ?>