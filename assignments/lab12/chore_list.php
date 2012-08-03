<?php
	/*
	 * ITC216 - Lab 12 - Tanya Sweeney - Family Chore List - Submitted 8/16/2011
	 */
	
	include("names.php");
	
	$persons = array();
	$persons[0] = new Person("Tina", "Kelley");
	$persons[1] = new Person("Kyler", "Kelley");
	$persons[2] = new Person("Pam", "Kelley");
	$persons[3] = new Person("Dave", "Kelley");
	
	$persons[0]->addChore("Taxes");
	$persons[0]->addChore("Gardening");
	$persons[1]->addChore("Dishes");
	$persons[1]->addChore("Wash Car");
	$persons[2]->addChore("Make Bed");
	$persons[2]->addChore("Mend Clothes");
	$persons[3]->addChore("Make Bed");
	$persons[3]->addChore("Wash Floor");

?>

<html>
	<body>
		<h1>Family Chore List:</h1>
		<?php
		//loop through persons and display each's name and chores
		foreach($persons as $person)
		{
			echo "<h3>" . $person->getName() . "</h3>";
			echo $person->getChores();
		}
		
		?>
	</body>
</html>