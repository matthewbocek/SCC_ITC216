<?php
	/* www.tanyalsweeney.com/itc216/assignments/lab5/lab5a.php
	 * Tanya Sweeney, ITC216
	 * Lab 5 - forms
	 * Submitted July 12, 2006
	 */
	
	 //Declare persistent variables
	 $firstName = "";
	 $lunchPrice = "";
	 $termsChecked = "";
	 $termsCheckedIsChecked = "unchecked";
	 $errorFirstName = "";
	 $errorLunchPrice = "";
	 $errorTermsChecked = "";
	 $successState = FALSE;
	 $successMessage = "";
	 
	 //find out if user pressed button to continue
	 If(isset($_GET['submit']))
	 {
	 	$firstName = $_GET['first_name'];		//extract first name from user input
	 	$lunchPrice = $_GET['lunch_price'];		//extract lunch price
	 	$termsChecked = $_GET['terms'];			//determine if user agreed to terms
	 	$successState = TRUE;					//tracks state (pass/fail) of if/else validation
	 	
	 	if(empty($firstName))					//Did user provide first name?
		{
			$errorFirstName = "* Blank";		//No? ERROR!
			$successState = FALSE;				//... and fail success state. Boo.
		}
		If(!is_numeric($lunchPrice) or $lunchPrice < 0) //Positive number for lunch price?
		{
			$errorLunchPrice = "* Not a valid lunch price";
			$successState = FALSE;
		}
		If(isset($_GET['terms']))				//check whether terms is set
		{
			$termsChecked = $_GET['terms'];		//pass setting into terms variable
		}
		If($termsChecked != "agree")			//if the user did NOT check the box...
		{
			$errorTermsChecked = "* You must agree to the terms and conditions";
			$successState = FALSE;				//ERROR and FAIL! Boo!
		}
		else ($termsCheckedIsChecked = "checked"); // but if the user checked the box... happy!
		
		If ($successState == TRUE)				//did the form pass all tests? Yes?
		{
			$successMessage = "Welcome $firstName"; //create a success message
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
		<?php if($successState == TRUE) { 	//did the user successfully compete the form? ?>
		
			<h3><?php echo $successMessage;	//Yes? Show the welcome message! Yay! ?></h3>
			
		<?php } else {		//shows form with error messages if form is incomplete ?>
			<h3>How much did you spend????</h3>
			<form name = "lunch_cost_form_a" action = "lab5a.php" method = "get">
				First Name:
				<input type = "text" name = "first_name" value = "<?php echo $firstName ?>" />
				<span class = "error"><?php echo $errorFirstName ?></span><br /><br />
				
				Lunch Cost:
				<input type = "text" name = "lunch_price" value = "<?php echo $lunchPrice ?>" />
				<span class = "error"><?php echo $errorLunchPrice ?></span><br /><br />
				
				<input type="checkbox" name="terms" value="agree"<?php echo $termsCheckedIsChecked; ?>>
					Do you agree to the terms and conditions?
				<span class="error"></font><?php echo $errorTermsChecked; ?></span><br /><br />
				
				<input type = "submit" name = "submit" value = "continue" />
				
			</form>
		<?php }	//closing curly brace for else success state statement ?>
	</body>
</html>