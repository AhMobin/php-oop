<?php

class Person{
	const ID = 100;
	public $userName;

	public function __construct($uname){
		$this->userName = $uname;
	}

	public function Display(){
		echo "This username is - {$this->userName} Whose ID is - ".Person::ID;
	}
}

$user = "Ah Mobin";
$userData = new Person($user);
$userData->Display();

?>