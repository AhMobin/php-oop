<?php 

abstract class Student{ //abstract class

	public $name;
	public $age;

	public function details(){
		return $this -> name ." is ". $this -> age ." years old <br>";
	}

	abstract public function school(); // abstract method

}

class Boy extends Student{
	
	public function describe(){
		return parent::details()." And I am 25. <br>"; //can be written as - Student::details()
	}

	public function school(){
		return "I would like watch triller movies. <br>";
	}
}

$boys = new Boy;
$boys -> name = "Mobin";
$boys -> age = "23";
echo $boys -> describe();
echo $boys -> school();

?>