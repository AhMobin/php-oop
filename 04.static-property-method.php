<?php

class Person{
	const ID = 100;
	public $name;
	public static $age;

	public function __construct($uname, $uage){
		$this->name = $uname;
		self::$age = $uage; //$this->age will not appear because its static property
	}

	public function displayName(){
		echo "Name : ".$this->name."<br>";
	}
	public static function displayStatic(){
		echo "ID : ".Person::ID."<br> Age : ".self::$age."<br>";
	}
}

Person::displayStatic(); /// no need to create object to execute static method

$u_name = "AH Mobin";
$u_age = 23;
$personData = new Person($u_name, $u_age);
$personData->displayName();

?>