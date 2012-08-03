<?php

	$phoneNumber = "";
	$errorPhone = "";
	$successMessage = "";
	
	if(isset($_GET["submit"]))
	{
		$phoneNumber = ($_GET["phone_number"]);
		$regEx = "/^(\d\d\d\d\d\d\d\d\d\d|\(\d\d\d\)\s?\d\d\d[\s-]?\d\d\d\d|\d\d\d[\s.-]?\d\d\d[\s.-]?\d\d\d\d)$/";
	
	if(preg_match($regEx, $phoneNumber))//preg = pattern of regular expression
		{
			$successMessage = "YEAH MATCH!!!";
		}//end if($phoneNumber != "")

		else
		{
			$errorPhone = "* Sorry that's not a valid phone number";
		}//end else
	}//end if(isset($_GET["field"))
?>


<html>
	<head>
		<style type="text/css">
			.error
			{
				color:red;
			}
		</style>
	</head>
	<body>
		<form name="validate_phone_number" action="lab9.php"method="get">
			Phone Number:
			<input type="text" name="phone_number" value="<?php echo $phoneNumber; ?>"/>
			<span class="error"><?php echo $errorPhone; ?></span><br /><br />
			
			<input type="submit" name="submit" value="go!" />
		
			<div><?php echo $successMessage; ?></div>
		</form>
	</body>
</html>