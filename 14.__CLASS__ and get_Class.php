<?php 

// __CLASS__ -> return the name of class where it belongs
// get_class() -> return the name of class which class has been instantiated


abstract class topperClass{
	public function topper(){
		echo "Return <b>parent class</b> constant and class name : <b>".__CLASS__."</b><br>"; 
		echo "Return <b>parent function</b> constant and class name : <b>".get_class($this)."</b><br>";
	}
}

class lowerClass extends topperClass{
	public function lower(){
		echo "Return <b>child class</b> constant and class name : <b>".__CLASS__."</b><br>";
		echo "Return <b>child function</b> constant and class name : <b>".get_class($this)."</b><br>";
	}

	public function absMethod(){
		parent::topper();
	}
	
	
}

$lower = new lowerClass;

$lower -> topper();
echo "<br>";
$lower -> lower();
echo "<br>";
$lower -> absMethod();

/***
************
** OUTPUTS *
************

1. topperClass => topper() belongs in topperClass class
2. lowerClass  => $lower as instantiation of lowerClass class.

3. lowerClass  => lower() belongs in lowerClass class
4. lowerClass  => $lower as instantiation of lowerClass class.

5. topperClass => absMethod() belongs in topperClass class because it called(extended) from topperClass
6. lowerClass  => $lower as instantiation of lowerClass class.

**
**
***/

 ?>