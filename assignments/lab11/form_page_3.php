<?php
/*
 * ITC216, Tanya Sweeney, Lab 11, form_page_3.php, submitted 8/16/2011
 */

	include("form_handler.php");
	
	session_start();
	
	$errorMessage1 = "";
	$errorMessage2 = "";
	$action = "";
	
	if(isset($_GET['submit']))
	{
		if(!isset($_GET["q5"]))
		{
			$errorMessage1="* Pick One";
		}
		if(!isset($_GET["q6"]))
		{
			$errorMessage2="* Pick One";
		}
		else
		{
			$_SESSION["q5"] = $_GET["q5"];
			$_SESSION["q6"] = $_GET["q6"];
			header("Location:form_page_4.php");
		}
	}

?>
<html>
	<head>
		<style type="text/css">
			.error {color:red;}
			.question 
			{
				color:blue;
				font-size:larger;
			}
		</style>
	</head>
	
	<body>
		<h2>Personality Test Page 3</h2>
		<p>Who doesn't love playing in the water?</p>
		
		<form action="" method="get">
			
			<span class="question"><?php echo $q5; ?></span>
			<div class="error"><?php echo $errorMessage1; ?></div><br />
			<input type="radio" name="q5" value="a" /><?php echo $a5a; ?><br />
			<input type="radio" name="q5" value="b" /><?php echo $a5b; ?><br />
			<input type="radio" name="q5" value="c" /><?php echo $a5c; ?><br />
			<input type="radio" name="q5" value="d" /><?php echo $a5d; ?><br /><br />
			
			<span class="question"><?php echo $q6; ?></span>
			<div class="error"><?php echo $errorMessage2; ?></div><br />
			<input type="radio" name="q6" value="a" /><?php echo $a6a; ?><br />
			<input type="radio" name="q6" value="b" /><?php echo $a6b; ?><br />
			<input type="radio" name="q6" value="c" /><?php echo $a6c; ?><br />
			<input type="radio" name="q6" value="d" /><?php echo $a6d; ?><br /><br />
			
			<input type="submit" name="submit" value="continue" />
			
		</form>
	</body>
</html>