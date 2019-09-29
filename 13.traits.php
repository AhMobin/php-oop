<?php 

trait Php{
	public function phpCoder(){
		return "PHP developer <br>";
	}
}

trait Javascript{
	public function jsCoder(){
		return "JavaScript developer <br>";
	}
}

trait PHPnJS{
	use Php, Javascript;
}


class backend{
	use Php; // access only Php trait
}

class frondend{
	use Javascript; // access only Javascript trait
}

class fullstack{
	use PHPnJS; // access both Php and Javascript trait
	public function phpCoder(){ ///most priority method
		return "Fullstack developer <b>(priority)</b> <br>";
		/// works like abstract class/method
	}
}


$back = new backend;
$front = new frondend;
$full = new fullstack;


echo $back -> phpCoder();
echo $front -> jsCoder();

echo $full -> phpCoder();
echo $full -> jsCoder();

 ?>