<?php
	//welcome.php
	
	$firstName = $_POST['first_name'];		//method changed from $_GET to $_POST 
	$lastName = $_POST['last_name'];
	
	echo "<h3>WELCOME $firstName $lastName!</h3>";
	echo "Thank you for trying out my form!";

?>