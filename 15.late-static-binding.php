<?php 

class Php{
	public static $name = "mobin";
	public static function Name(){
		//return selft::$name; // if we use it (self::) result will come out 'mobin' 
		return static::$name ; // if we use it (static::) result will come out 'Ah mobin' that inherited 
	}
}

class childPhp extends Php{
	public static $name = "Ah mobin";
	public function child(){
		return parent::Name() . " <b>inherited</b>";
	}
}

$namePhp = new childPhp;

echo $namePhp -> child();

 ?>