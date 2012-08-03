<?php
/*
 * ITC216 - Tanya Sweeney
 * lab6.php - Favorite Foods :D
 * Submitted July 18, 2011
 */
 
 //create variables
$firstName = "";
$lastName = "";
$gender = "";
$food = "";
$termsChecked = "";
$successState = "";

//gender array
$genderChecked = Array();
$genderChecked["Male"] = "";
$genderChecked["Female"] = "";

//food array
$foodSelected = Array();
$foodSelected["Please choose one"] = "";
$foodSelected["enchiladas"] = "";
$foodSelected["peaches"] = "";
$foodSelected["navratan korma"] = "";
$foodSelected["pho with rare beef"] = "";
$foodSelected["pepardelle meatsauce"] = "";

//variables for error messages
$errorFirstName = "";
$errorLastName = "";
$errorGenderChecked = "";
$errorTerms = "";

//on click...
if (isset($_GET["submit"]))//if the user clicks the "login" button

{
	$successState = TRUE;//start success state out as true
	
	$firstName = $_GET["first_name"];//persist first name
	if(empty($firstName))//otherwise, show an error...
	{
		$errorFirstName = "* blank";
		$successState = FALSE;//and fail success state.
	}
	
	$lastName = $_GET["last_name"];//persist last name
	if(empty($lastName))//or show an error...
	{
		$errorLastName = "* blank";
		$successState = FALSE;//and fail success state.
	}
	
		if(!isset($_GET["gender"]))//if gender is not set
	{
		$errorGenderChecked = "* You must pick a gender";//show an error...
		$successState = FALSE;//and fail success state.
	}
	else
	{
		$gender = $_GET["gender"];//cause gender to persist if selected
		$genderChecked[$gender] = 'checked = "checked"';//push data through.
	}
	
	$food = $_GET["food"];
	if ($food == "Please choose one")//default - no food selected yet
	{
		$successState = False;//no error message, but fail success state if they didn't!
	}
	else
	{
		$food = $_GET["food"];//cause food selection to persist
		$foodSelected[$food]='selected="selected"';	
	}
	
	
	if(!isset($_GET["terms"]))		//if terms checkbox is blank
		{
			$errorTerms = "* You must agree";
			$successState = false;
		}
		else
		{
			$termsChecked = 'checked="checked"';
		}

	
	if($successState)//This loop pushes data to welcome page
	{
		header("Location:lab6_welcome.php?first_name=$firstName&last_name=$lastName&gender=$gender&food=$food");
	}
}


?>

<html>
	<head>
		<!-- Style for error messages: red text -->
		<style type="text/css">
			.error
			{
				color:red;
			}
		</style>
	</head>
	
	<body>
		<form action="" method="get">
			<!-- Form labels -->
			<h3>How hungry are you?</h3>
			<p>...Because I'm darned hungry!</p>
			
			<!-- Text boxes to collect user name -->
			First Name:
			<input style="text" name="first_name" value="<?php echo $firstName; ?>" />
			<span class="error"><?php echo $errorFirstName; ?></span><br /><br />
			
			Last Name:
			<input style="text" name="last_name" value="<?php echo $lastName; ?>" />
			<span class="error"><?php echo $errorLastName; ?></span><br /><br />
			
			
			
			<!-- Radio buttons for user gender -->
			Gender <span class="error"><?php echo $errorGenderChecked; ?></span>
			<br />
			<?php
				foreach($genderChecked as $value => $isChecked)
				{
					echo '<input type="radio" name="gender" value="' . $value .'" />' . $value . '<br />';
				}
			?><br />
			
			<!-- Drop down menu to select user favorite food -->
			Favorite food:<br />
			<select name = "food">
				<?php
					foreach($foodSelected as $food => $isSelected)//records which item we selected
						{
							echo "<option \"$isSelected\">$food</option>";
						}
				?>
			</select><br /><br />
			
			<!-- Check box for terms -->
			<input type="checkbox" name="terms" <?php echo $termsChecked; ?> />Do you agree to the terms and conditions?
			<span class="error"></font><?php echo $errorTerms; ?></span><br /><br />
			
			<!-- Login button -->	
			<input type="submit" name="submit" value="Login" />
			
		</form>
	</body>
</html>