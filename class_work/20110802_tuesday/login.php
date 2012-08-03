<?php
/*
 * Make sure no spaces, text, charachters of any kind before session_start();
 */
session_start();

	$firstName = "";
	$lastName = "";
	$errorFirstName = "";
	$errorLastName = "";
	
	if(isset($_GET["submit"]))
	{
		$firstName = $_GET["first_name"];
		$lastName = $_GET["last_name"];
		
		$successState = true;
		
		if(empty($firstName))
		{
			$errorFirstName = "* blank";
			$successState = false;
		}
		
		if(empty($lastName))
		{
			$errorLastName = "* blank";
			$successState = false;
		}
		
		if($successState)
		{
			$_SESSION["first_name"] = $firstName;//save first name into session
			$_SESSION["last_name"] = $lastName;//save last name into session
			header("Location:order.php");//querystring now no longer includes names
		}
	}
?>
<html>
	<head>
		<style type="text/css">
			.error {
				color:red;
			}
		</style>
	</head>
	<body>
		<form action="" method="get">
			First Name:
			<input type="text" name="first_name" value="<?php echo $firstName; ?>" />
			<span class="error"><?php echo $errorFirstName; ?></span><br />
			
			Last Name:
			<input type="text" name="last_name" value="<?php echo $lastName; ?>" />
			<span class="error"><?php echo $errorLastName; ?></span><br />
			
			<input type="submit" name="submit" value="continue" />
		</form>
	</body>
</html>
