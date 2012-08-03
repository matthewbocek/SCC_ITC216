<?php
/*
 * ITC216, Tanya Sweeney, Lab 11, form_page_4.php, submitted 8/16/2011
 */

	include("form_handler.php");
	
	session_start();
	
	$errorMessage1 = "";
	$action = "";
	
	if(isset($_GET['submit']))
	{
		if(!isset($_GET["q7"]))
		{
			$errorMessage1="* Pick One";
		}

		else
		{
			$_SESSION["q7"] = $_GET["q7"];
			header("Location:result.php");
		}
	}

?>
<html>
	<head>
		<style type="text/css">
			.error {color:red;}
			.question 
			{
				color:purple;
				font-size:larger;
			}
		</style>
	</head>
	
	<body>
		<h2>Personality Test Page 4</h2>
		<p>Now this is an odd question...</p>
		
		<form action="" method="get">
			
			<span class="question"><?php echo $q7; ?></span>
			<div class="error"><?php echo $errorMessage1; ?></div><br />
			<input type="radio" name="q7" value="a" /><?php echo $a7a; ?><br />
			<input type="radio" name="q7" value="b" /><?php echo $a7b; ?><br />
			<input type="radio" name="q7" value="c" /><?php echo $a7c; ?><br />
			<input type="radio" name="q7" value="d" /><?php echo $a7d; ?><br /><br />
			
			<input type="submit" name="submit" value="continue" />
			
		</form>
	</body>
</html>