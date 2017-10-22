<?php
spl_autoload_register(function($class_name){
	include "classes/".$class_name.".php";
});

$pro = new Programming();
$serial = serialize($pro);

file_put_contents("file.txt", $serial);
echo $serial;
 ?>