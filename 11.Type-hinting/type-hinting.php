
<?php

function autoload($class){
	include '../9.autoload/classes/'.$class.'.php';
}

spl_autoload_register('autoload');



class typeHinting{
	public $fromPhp;

	function __construct(Php $value){ //only Php class's method can access...//object type value
		$this -> fromPhp = $value;
		$this -> fromPhp -> type();
	}
}

$php = new Php;
new typeHinting($php); // instantiat typeHinting class as object with type hinting the Php Object (instantiated Php class)



?>