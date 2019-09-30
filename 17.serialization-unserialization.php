<?php 

class serialization{
	public $name;
	public $designation;
	protected $email;
	private $phone;

	public function __construct($name, $desig, $mail, $phone){
		$this -> name = $name;
		$this -> designation = $desig;
		$this -> email = $mail;
		$this -> phone = $phone;


		echo "Name: ". $this -> name . "<br>Designation: ". $this -> designation ."<br>Email: ". $this -> email ."<br>Phone: ". $this -> phone;
	}
}

$detail = new serialization('Mobin', 'Student', 'ahm@mail.com', '01620327185');
echo "<br><b>Serialized Format::</b><br>";
//serialization
echo $serial = serialize($detail);
//put into a file
file_put_contents("serialized.txt", $serial);
echo "<br>";
//retrive from file
$content = file_get_contents("serialized.txt");
//unserialization
$unserial = unserialize($content);
echo "<pre>";
print_r($unserial);
echo "</pre>";
 ?>