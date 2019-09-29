<?php 

class magicMethods{

	public function __get($property){
		echo $property." does not exist <br>";
	}

	public function __set($property, $value){
		echo $property." and its value ".$value." are not found <br>";
	}

	public function __call($method, $arg_array){
		echo $method." method and its arguments (".implode(',', $arg_array).") are not found<br>";
	}

	public function methodName(){
		echo "exists";
	}

}

class method extends magicMethods{

}



$magic = new magicMethods;

$magic -> name; //undefined property assigned in __get($property)
$magic -> name = "mobin"; //undefined property and value assigned in __set($property, $value)
$magic -> noneExist('2', '3', '3'); //undefined method and array of arguments for __call($method, $arg_array)

?>