<?php
class test{
    public $name;
    private $mobile;
    function __construct($name, $mobile){
        $this->name = $name;
        $this->mobile = $mobile;
        echo "Name : ". $this -> name ." Mobile : ". $this -> mobile ."<br><br>";
    }
    public function __clone(){
        echo "During Cloning I'm only Executing! And I can change anything<br>";
        $this->mobile="01922009988";
        echo "Name : ". $this -> name ." Mobile : ". $this -> mobile ."<br>";
    }
}
$obj1 = new test("Farhaan" , "01700000000");
$obj2 = clone $obj1;
$obj2->name = "Habibr";

$test = "1234";
echo md5($test);

?>