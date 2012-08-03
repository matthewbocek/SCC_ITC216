<?php
/*
 * Tanya Sweeney, ITC216, Lab 8 - search.php, submitted 7/21/2011
 */

	include("includes/dictionary_helper.php");
		
	define("BLANK_ERROR", "* Blank");
	define("VALID_ERROR", "* Word not in dictionary");
	
	$word = "";
	$errorWord = "";
	$errorValid = "";
	$successState = FALSE;
	$successMessage="";
	
	if(isset($_GET["submit"]))
	{
		$word = $_GET["word"];
		$successState = TRUE;
		
		if(empty($_GET["word"]))
		{
			$successState = FALSE;
			$errorWord = BLANK_ERROR;
		}
		
		if($successState && !ValidDictionaryWord($word,$selectedItem))
		{
			$successState = False;
			$errorValid = VALID_ERROR;
		}
		
		if($successState)
		{
			$successMessage = ValidDictionaryWord($word,$selectedItem);
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
		
		<h3>Search Dictionary:</h3>
		
		<form action="" method="get">
		
		Word:<br />
		<input type="text" name="word" value="<?php echo $word; ?>" />
		<span class="error"><?php echo $errorWord; ?></span><br /><br />
		
		<input type="submit" name="submit" value="search" />
		<span class="error"><?php echo $errorValid; ?></span><br /><br />
		</form>
		
		<h3>Definition:</h3>
		<p><b><?php echo $successMessage; ?></b></p>
		<a href="dictionary.php">Dictionary</a>
	</body>
</html>