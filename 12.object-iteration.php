<?php 

class Person{
	public $name		 = "Mobin";
	public $age			 = "23";
	public $programSkill = "Php";

	private $email 		 = "ahmobin@mail.com";
	protected $password  = "123456";

	public function innerIteration(){
		echo "<b>Iteration Inside Of The Class To Display All Scopes (private/protected)</b><br>";
		
		foreach ($this as $key => $value) {
		echo "<pre>";
		echo "$key => $value";
		echo "</pre>";
	}
	}
	

}

$person = new Person;

echo "<b>Iteration Outside Of The Class </b><br>";
foreach ($person as $key => $value) {
	echo "<pre>";
	echo "$key => $value";
	echo "</pre>";
}

$person -> innerIteration();


?>