
<?php
#constructor
class Person{
	public $uName;
	public $uId;

	public function __construct($userName, $userId){
		$this->uName = $userName;
		$this->uId  = $userId;

		echo "This person Name is {$this->uName} <br>Person Id is {$this->uId}.";
	}

	public function __destruct(){
		//example method for destructor #JUST LIKE LOGOUT USER
		unset($this->uName);
		unset($this->uId);
		echo "Log Out";
	}
}

$username = 'AH Mobin';
$userid = '23';

$personInfo = new Person($username, $userid); // can initialize argument
// $personInfo->uName = "AH Mobin"; // can initialize argument
// $personInfo->uId = "23";
?>


