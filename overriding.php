<?php

class Book{
	public $name = "Emroze";
	public $name_second = "Nowroze";
	
	public function author(){
		return"The author name is : ".$this->name;
	}
}

class newBook extends Book{
	public function author(){
		//return "The authors name are: ".$this->name." & ".$this->name_second;
		return parent::author()." & Second author name is ".$this->name_second;
	}
}

$book = new newBook();
echo $book->author();
 ?>

