<?php
#login.php

include("login_helper.php");//you can use "require," which will throw an error if the file
//does not exist. Code will stop right here if the file doesn't exist.

define("FILE_NAME", "names.txt");
define("BLANK_ERROR","* Blank");
define("FIRST_NAME","first_name");
define("LAST_NAME","last_name");
define("NOT_VALID_ERROR","You are not in the system.");

//declare variables
$firstName = "";
$lastName = "";
$errorFirstName = "";
$successState = "";

if(isset($_GET["continue"]))
{
	$firstName = $_GET[FIRST_NAME];
	$lastName = $_GET[LAST_NAME];
	$successState = TRUE;
	
	if(empty($_GET[FIRST_NAME]))
	{
		$successState = FALSE;
		$errorFirstName = BLANK_ERROR;
	}
	if(empty($_GET[LAST_NAME]))
	{
		$successState = False;
		$errorLastName = BLANK_ERROR;
	}
	if($successState && !validUser($firstName, $lastName))
	{
		$successState = False;
		$errorFirstName = NOT_VALID_ERROR;
	}

	if($successState)
	{
		$getString = http_build_query($_GET);//creates query string! Sweet!
		header("location:welcome.php?$getString");//pushes query string
	}
}


?>

<html>
	
	
	<!-- add red to error messages -->
	<head>
		<style type="text/css">
			.error
			{
				color:red;
			}
		</style>
	</head>
	
	
	<body>
		<form action="" method="get">
			
			First Name: <input type="text" name="first_name" value="<?php echo $firstName; ?>" />
			<span class="error"><?php echo $errorFirstName; ?></span>
			<br /><br />
			Last Name: <input type="text" name="last_name" value="<?php echo $lastName; ?>" />
			<span class="error"><?php echo $errorFirstName; ?></span>
			<br /><br />
			<input type="submit" name="continue" value="continue" />
			
		</form>
	</body>
</html>