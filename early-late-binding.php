<?php

class Book{
	public static $name = "Emroze";
	public static $name_second = "Nowroze";
	
	public static function author(){
		return"The author name is : ".self::$name;
	}
	
	public static function getAuthor(){ // depend upon object or late binding
		//echo self::author();
		echo static::author(); // late static binding
	}
}

class newBook extends Book{
	public static function author(){
		return "The authors name are: ".self::$name." & ".self::$name_second;
	}
}

Book::getAuthor();
echo "<br/>";
newBook::getAuthor();



//early binding is on compiler time
// after compiler is runtime binding 
 ?>

