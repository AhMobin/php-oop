<?php 

class userPanel{
	public $name;
	public $id;

	public function __construct($uname, $uid){
		$this -> name = $uname;
		$this -> id   = $uid;
	}

	public function display(){
		echo "Name is {$this -> name} And ID is {$this -> id}";
	}
}


class admin extends userPanel{
	public $level;

	public function display(){
		//override the method from superclass--priority method for admin class
		echo "Name is {$this -> name}, ID is {$this -> id} and Level is {$this -> level}";
	}
}

$name = "Mobin";
$id   = "120";
$upanelData = new userPanel($name, $id);
$upanelData -> display();

echo "<br>";

$adminPanel = new admin($name, $id);
$adminPanel ->level = "Administror";
$adminPanel -> display();

?>