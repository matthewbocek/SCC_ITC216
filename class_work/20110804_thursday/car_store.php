<?php
	//including car.php lets us access the car class.
	include("car.php");
	
	//make an instance of a car
	/*	Passing in data within quotes makes the lines of code below unnecessary.
	 * 	This is called short-form syntax. You can only use short-form syntax if
	 *  you've already created a constructor.
	//$amysCar = new Car("Impala", "Chevy", "Cherry Red", 1968, 4); THIS BECOMES $cars[0]
	$amysCar->model = "Impala";
	$amysCar->make = "Chevy";
	$amysCar->color = "Cherry Red";
	$amysCar->year = "1968";
	$amysCar->numDoors = 4;
	*/
	
	//$tanyasCar = new Car("Forrester", "Subaru", "White", 1990, 5); THIS BECOMES $cars[1]

	//now using the array instead of the line of code above.
	//an array of cars. Make this after you've successfully used the car class.
	$cars = array();
	$cars[0] = new Car("Impala", "Chevy", "Cherry Red", 1968, 4);
	$cars[1] = new Car("Forrester", "Subaru", "White", 1990, 5);
	$cars[2] = new Car("Corolla", "Toyota", "Silver", 1990, 4);
	
	//change color of car 1 using the paintCar function, as follows:
	$cars[1]->paintCar("Purple");
	$cars[1]->addFeature("Air Conditioning");
	$cars[1]->addFeature("Power Steering");
	$cars[1]->addFeature("Power Locks");
	$cars[1]->addFeature("Heated Seats");

	
?>

<html>
	<body>
		<?php
			//echo "<h3 style='color: red'>Amy drives a pimpin' " . $amysCar->getDescription() . "</h3>";
			//echo "<h3 style='color: green'>Tanya drives a mom-mobile " . $tanyasCar->getDescription() . "</h3>";
			
			//The lines of code above go away when you transition to the array. Now you use...
			foreach($cars as $car)
			{
				echo $car->getDescription() . "<br />";
				//echo "&nbsp &nbsp &nbsp" . $car->getFeatures() . "<br />";
			}
		?>
	</body>
</html>