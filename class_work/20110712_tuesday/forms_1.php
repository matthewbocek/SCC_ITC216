<?php
	//forms_1.php
	
	/*
	 * 1.	Get the first and last name from the get super global
	 * 2.	Check if they are blank == ""
	 * 3.	If either is blank, echo "first name was blank"
	 * 4.	Otherwise, echo "nice job"
	 */
	
	$firstName = "";						//Declare variables that persist outside the
	$lastName = "";							//"if" statement
	$email = "";
	$subscribeChecked = "";
	$errorFirstName = "";
	$errorLastName = "";
	$errorEmail = "";
	$errorSubscribe = "";
	$successState = false;
	$successMessage = "";
	
	if(isset($_GET['submit']))				//execute only after "go" button is clicked
	{
		$firstName = $_GET['first_name'];	//extract first name from user input
		$lastName = $_GET['last_name'];		//extract last
		$email = $_GET['email'];			//extract email
		$subscribe = $_GET['subscribe'];	//Is "subscribe" check box checked?
		$successState = true;				//tracks state (pass/fail) of if-else validation
		
		if ($firstName == "")				//if first name is blank on click "go"
	//	if (empty($firstName)) 			Could use this instead of the line above
		{
			$errorFirstName = "First Name was blank.";
			$successState = false;
		}
		
		if($lastName == "")					//if last name is blank
		{
			$errorLastName = "Last Name was blank.";
			$successState = false;
		}
		
		if(empty($email))					//if email is blank
		{
			$errorEmail = "Email was blank.";
			$successState = false;
		}
		
		if(!isset($_GET['subscribe']))		//if subscribe checkbox is blank
		{
			$errorSubscribe = "You must subscribe to the email list.";
			$successState = false;
		}
		else
		{
			$subscribeChecked = 'checked = "checked"';
		}
		
		if($successState == true)			//evaluates whether form passed above tests
		{
			$successMessage = "Welcome $firstName $lastName";
		}
	}
?>

<html>
	<head>
		<style type="text/css">
			.error
			{
				color: red;
			}
		</style>
	</head>
	<body>
		<?php if($successState == TRUE) { 	//evaluates if form is complete ?>
		
			<h3><?php echo $successMessage;	//shows welcome message ?></h3>
			
		<?php } else {		//shows form with error messages if form is incomplete ?>
		
			<form name="user_data_form" action="forms_1.php" method="get">
				
				First Name:
				<input type="text" name="first_name" value="<?php echo $firstName; ?>" />
				<span class="error"></font><?php echo $errorFirstName; ?></span><br />
				
				Last Name:
				<input type="text" name="last_name" value="<?php echo $lastName; ?>" />
				<span class="error"></font><?php echo $errorLastName; ?></span><br /><br />
				
				Email:
				<input type="text" name="email" value="<?php echo $email; ?>" />
				<span class="error"></font><?php echo $errorEmail; ?></span><br /><br />
				
				<input type="checkbox" name="subscribe" "<?php echo $subscribeChecked; ?>" />Subscribe to mailing list
				<span class="error"></font><?php echo $errorSubscribe; ?></span><br /><br />
				
				<input type="submit" name="submit" value="go" />
				
			</form>
		<?php }	//closing curly brace for else success state statement ?>
	</body>
</html>