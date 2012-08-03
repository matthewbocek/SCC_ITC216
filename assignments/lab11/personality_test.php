<?php
/*
 * ITC216, Tanya Sweeney, Lab 11, personality test, submitted 8/16/2011
 */

	include("form_handler.php");
	
	session_start();
	
	$errorMessage1 = "";
	$errorMessage2 = "";
	$action = "";
	
	if(isset($_GET['submit']))
	{
		if(!isset($_GET["q1"]))
		{
			$errorMessage1="* Pick One";
		}
		if(!isset($_GET["q2"]))
		{
			$errorMessage2="* Pick One";
		}
		else
		{
			$_SESSION["q1"] = $_GET["q1"];
			$_SESSION["q2"] = $_GET["q2"];
			header("Location:form_page_2.php");
		}
	}

?>
<html>
	<head>
		<style type="text/css">
			.error {color:red;}
			.question 
			{
				color:green;
				font-size:larger;
			}
		</style>
	</head>
	
	<body>
		<h2>Personality Test</h2>
		<p>Time to find out more about your personality.</p>
		<p>When completing your personality test, remember</p>
		<p>to select the first option that comes to your head.</p>
		<p>Don't overthink it!</p>
		
		<form action="" method="get">
			
			<span class="question"><?php echo $q1; ?></span>
			<div class="error"><?php echo $errorMessage1; ?></div><br />
			<input type="radio" name="q1" value="a" /><?php echo $a1a; ?><br />
			<input type="radio" name="q1" value="b" /><?php echo $a1b; ?><br />
			<input type="radio" name="q1" value="c" /><?php echo $a1c; ?><br />
			<input type="radio" name="q1" value="d" /><?php echo $a1d; ?><br /><br />
			
			<span class="question"><?php echo $q2; ?></span>
			<div class="error"><?php echo $errorMessage2; ?></div><br />
			<input type="radio" name="q2" value="a" /><?php echo $a2a; ?><br />
			<input type="radio" name="q2" value="b" /><?php echo $a2b; ?><br />
			<input type="radio" name="q2" value="c" /><?php echo $a2c; ?><br />
			<input type="radio" name="q2" value="d" /><?php echo $a2d; ?><br /><br />
			
			<input type="submit" name="submit" value="continue" />
			
		</form>
	</body>
</html>