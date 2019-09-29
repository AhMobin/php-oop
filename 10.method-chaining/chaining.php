
<?php

function autoload($class){
	include '../9.autoload/classes/'.$class.'.php';
}

spl_autoload_register('autoload');



$calculate = new calculation;

echo "Result is ". $calculate -> getValue(2, 5) -> getResult();

?>