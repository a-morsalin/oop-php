<?php
spl_autoload_register(function($class_name){
	include "classes/".$class_name.".php";
});

$pro = new Programming();
$serial = serialize($pro);

$getCount = file_get_contents("file.txt");
$unserial = unserialize($getCount);
echo "<pre>";
print_r($unserial);
echo "</pre>";
 ?>