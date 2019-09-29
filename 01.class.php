<?php
session_start();


class person{
	public $name; // property
	public $age;

	public function personName(){ // Method 
		echo "This person name is : ".$this->name."<br>";
	}
	public function personAge($value){
		echo "This person age is : ".$this->age=$value;
	}
}

$personObj = new person; // Object
$personObj->name="Abu Horaira Mobin"; // initiats to property
$personObj->personName();
$personObj->personAge(23);

echo "<br><br><hr><br><br>"
// end class - method - object -> concept
?>

<!-- start a basic task using class - method - object -->

<!doctype html>
<html lang="en">
	  <head>
		    <!-- Required meta tags -->
		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		    <!-- Bootstrap CSS -->
		    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		    <title>Basic Calculation - Using PHP Class Object Method (OOP 1)</title>
	  </head>
	  <body>
		    <h1 class="mx-5 mb-3">Basic Calculation Form</h1>

		    <div class="container">
		    	<div class="row">
		    		<div class="col-md-8 col-lg-8">
		    			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
							 <div class="form-group">
							    <label for="inputOne">First Number Input</label>
							    <input type="number" class="form-control" name="input_one" aria-describedby="emailHelp" placeholder="Input First Number">
							  </div>
							  <div class="form-group">
							    <label for="inputTwo">Second Number Input</label>
							    <input type="number" class="form-control" name="input_two" placeholder="Input Second Number">
							</div>
							<button type="submit" name="calculate" class="btn btn-primary">Submit</button>
						</form>
		    		</div>
		    	</div>
		    </div>



    <?php
    ///calculation logic and output

    if(isset($_POST['calculate'])){
    	$inputOne = $_POST['input_one'];
    	$inputTwo = $_POST['input_two'];

    	if(empty($inputOne) || empty($inputTwo)){
    		echo  "Field Must Not Be Empty";
    		exit();
    	}else{
    		class Calculation{
    			public function sum($a, $b){
    				return "Summation : ". ($a+$b). "<br>";
    			}

    			public function sub($a, $b){
    				return "Substraction : ". ($a-$b). "<br>";
    			}

    			public function mult($a, $b){
    				return "Multiplication : ". ($a*$b). "<br>";
    			}

    			public function div($a, $b){
    				return "Division : ". ($a/$b). "<br>";
    			}

    			public function mod($a, $b){
    				return "Modulation : ". ($a%$b). "<br>";
    			}
    		}

    		$calculator = new Calculation;

    	?>

    	<div class="m-2 p-3">
    		<?php
    			echo "Your First Number is : ".$inputOne."<br>";
    			echo "Your Second Number is : ".$inputTwo."<br><br>";

    		echo $calculator -> sum($inputOne, $inputTwo);
    		echo $calculator -> sub($inputOne, $inputTwo);
    		echo $calculator -> mult($inputOne, $inputTwo);
    		echo $calculator -> div($inputOne, $inputTwo);
    		echo $calculator -> mod($inputOne, $inputTwo);
    		?>
    	</div>
    	<?php
    	}
    }
    ?>
		    

		    <!-- Optional JavaScript -->
		    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	  </body>
</html>


