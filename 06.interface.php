<br>
<br>

<?php 
// single interface - multipe class

interface Vehicle{
	public function startEngine();
}
//start cab
class CAB implements Vehicle{
	public function __construct(){
		$this-> startEngine();
	}

	public function startEngine(){
		echo "Start Your Engine!! Your CAB Will RUN <br>";
	}
}
//start truck
class TRUCK implements Vehicle{
	public function __construct(){
		$this-> startEngine();
	}

	public function startEngine(){
		echo "Start Your Engine!! Your TRUCK Will RUN <br>";
	}
}
//start bus
class BUS implements Vehicle{
	public function __construct(){
		$this-> startEngine();
	}

	public function startEngine(){
		echo "Start Your Engine!! Your BUS Will RUN <br>";
	}
}

$engineCAB = new CAB();
$engineTRUCK = new TRUCK();
$engineBUS = new BUS();

?>


<br>


<?php 
//multiple interface - single class

interface school{
	public function mySchool();
}

interface college{
	public function myCollege();
}

interface university{
	public function myUniversity();
}

class Teacher implements school, college, university{

	public function __construct(){
		$this-> mySchool();
		$this-> myCollege();
		$this-> myUniversity();
	}

	public function mySchool(){
		echo "This is me an school teacher <br>";
	}

	public function myCollege(){
		echo "This is me an college teacher <br>";
	}

	public function myUniversity(){
		echo "This is me an university lecturer <br>";
	}
}

$teacher = new Teacher();

?>