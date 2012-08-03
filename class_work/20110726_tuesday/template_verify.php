<?php
	$field = "";
	$errorField = "";
	$successMessage = "";
	
	if(isset($_GET["submit"]))
	{
		$field = ($_GET["field"]);
		
		//EMAIL VALIDATION
		//$regEx = "/^[a-z][\w_-]*(\.[\w_-]+)*@([\w_-]+\.)+[a-z]{2,4}$/i";
			//the slashes are a holder for our regular expression.
			
		//DATE VALIDATION
		$regEx = "/^(0[1-9]|1[0-2])\s?([\/\.-]\s?)?(0[1-9]|[12][0-9]|3[01])\s?([\/\.-]\s?)?([05-9][0-9]|1[0-1])$/";
		
		//  at end of date validation: This is the validation for the 2-digit year
		//  right here. ===>>([05-9][0-9]|1[0-1])
		//  This means 50-99 OR 1-11. The part that reads [05-9] is a CHARACTER CLASS
		//  that means "zero OR five through nine."
		
		
		
		//  with just "/Hello/" any string that includes the continuous letters hello will validate. 
		//  "/Hello/i" means case INSENSITIVE.
		//  "/^Hello/i" means this must be the first character of the string.
		//  "/^Hello$/i" means this must be the last character of the string.
		//  [] means any ONE of the characters inside will validate (but not two or more)
				//this works like "a"||"e"||"i"||"o"||"u" (|| is "or").
				//... But with regular expressions, use a single pipe for OR!
		//  "/^c[aeiou]t$/i" causes c(ANY VOWEL)t to validate.
		//  "/^c[a-z]t$/i" causes c(ANY LOWERCASE LETTER)t to validate.
		//  "/^c[A-Za-z]t$/" causes c(ANY LETTER)t to validate. c and t must be lower, middle any case.
		//  "/^c[0-9]t$/i" causes c(ANY DIGIT)t to validate.
		//  "^[^b]$/i" the ^ INSIDE square bracket means first letter NOT b
		//  "/^\$/i"
		//  "/^\d$/i" means start with any digit
		//  "/^\D$/i" means FAIL if start with any digit
		//  "/^\s$/i" means a single space
		//  "/^\S$/i" fail if space
		//  "/^\w$/i" means any letter or number will validate
		//  "/^\w$/i" means NO letter or number will validate. SYMBOL ONLY!
		//  "/^\.$/i" (period) means anything other than a line-break will validate
		
		//REPETITION
		
		//  "/^a*$/i" means any number of A's will validate (including zero!)
		//  "/^(hi)*$/i" means "hi" any number of times will validate (including zero!)
		//  "/^(hi)+$/i" means "hi" any number of times (but at least once) will validate
		//  "/^(hi)?$/i" means zero or one "hi" will validate.
		//  "/^(hi){2,3}$/i" means two to three "hi"s will validate.
		
		//OR
		
		//  "/^(hi|hello|bonjour)$/i" means hi, hello or bonjour will all validate.
		
		//ESCAPE CHARACTERS
		
		// "/^w\*\*d$/i" forces the user to type in "w**d"
		//"/^1\+1=2$/i" means type in "1+1=2"
		

		if(preg_match($regEx, $field))//preg = pattern of regular expression
		{
			$successMessage = "YAY!!!";
		}//end if($field != "")

		else
		{
			$errorField = "* Not Legit";
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
		<form name="refExp" action="template_verify.php"method="get">
			Field:
			<input type="text" name="field" value="<?php echo $field; ?>"/>
			<span class="error"><?php echo $errorField; ?></span><br /><br />
			
			<input type="submit" name="submit" value="go!" />
		
			<div><?php echo $successMessage; ?></div>
		</form>
	</body>
</html>


