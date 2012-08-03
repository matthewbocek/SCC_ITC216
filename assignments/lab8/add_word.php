<?php
/*
 * Tanya Sweeney, ITC216, Lab 8 - add_word.php, submitted 7/21/2011
 */

	//include dictionary helper file
	include("includes/dictionary_helper.php");
	
	//instantiate constants for error messaging
	define("ERROR_BLANK", "* Blank");
	define("ERROR_CONFLICT", "* This word is already in the dictionary and could not be added.");
	
	//declare variables
	$word = "";//user-input word to be added to dictionary
	$definition = "";//user-input dictionary to be added to dictionary
	$errorWord  = "";//error if word is blank
	$errorDefinition = "";//error if definition is blank
	$errorConflict = "";//error if word is already in dictionary
	$successState = "";//tracks pass/fail for each process
	$successMessage = "";//message for user upon successful addition of word to dictionary
	
	
	if(isset($_GET["submit"]))//enter this code when the "add book" button is clicked
	{
		$word = $_GET["word"];//get the word the user typed in
		$definition = $_GET["definition"];//get the definition from user
		$successState = TRUE;//so far, success!
		
		if(empty($word))//if user didn't type in a word, then...
		{
			$errorWord = ERROR_BLANK;//trigger an error message.
			$successState = FALSE;//fail.
		}
		
		if(empty($definition))//if user didn't provide a definition, then...
		{
			$errorDefinition = ERROR_BLANK;//trigger an error message.
			$successState = FALSE;//fail.
		}
		
		//if the word is already in the dictionary, flash an error and fail the process.
		if($successState && !addWordToFile($word, $definition))
		{
			$errorConflict = ERROR_CONFLICT;
			$successState = FALSE;
		}
		
		if($successState)
		{
			$successMessage = "You successfully added $word: $definition.";
			$word = "";
			$definition = "";
		}
	}
	

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
		
		<h3>Add a word to the Dictionary</h3>
		
		<form>
			
			Word:<br />
			<input type="text" name="word" value="<?php echo $word; ?>" />
			<span class="error"><?php echo $errorWord; ?></span><br /><br />
			
			Definition:<br />
			<input type="text" name="definition" value="<?php echo $definition; ?>" style="width:500; height:50" />
			<span class="error"><?php echo $errorDefinition; ?></span><br /><br />
			
			<input type="submit" name="submit" value="add word" />
			<span class="error"><?php echo $errorConflict; ?></span><br /><br />
			<h3><?php echo $successMessage; ?></h3>
			<a href="dictionary.php">Dictionary</a>
		</form>
	</body>
</html>