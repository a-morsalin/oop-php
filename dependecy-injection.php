<?php

Class Message{
	public function displayMessage($message){
		echo "User : $message" ."<br/>";
	}
}

Class UserProfile{
	
	private $showMessage;
	
	public function __construct($msg){
		$this->showMessage = $msg;
	}
	
	public function createUser(){
		$this->showMessage->displayMessage("created");
	}
	
	public function updateUser(){
		$this->showMessage->displayMessage("updated");
	}
	
	public function deleteUser(){
		$this->showMessage->displayMessage("deleted");
	}
}

$message_all = new Message();
$profile = new UserProfile($message_all);

$profile->createUser();
$profile->deleteUser();
$profile->updateUser();

 ?>

