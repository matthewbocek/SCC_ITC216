<?php
/*
 * ITC216, Tanya Sweeney, Lab 11, form_page_2.php, submitted 8/16/2011
 */

	include("form_handler.php");
	
	session_start();
	
	$errorMessage1 = "";
	$errorMessage2 = "";
	$action = "";
	
	if(isset($_GET['submit']))
	{
		if(!isset($_GET["q3"]))
		{
			$errorMessage1="* Pick One";
		}
		if(!isset($_GET["q4"]))
		{
			$errorMessage2="* Pick One";
		}
		else
		{
			$_SESSION["q3"] = $_GET["q3"];
			$_SESSION["q4"] = $_GET["q4"];
			header("Location:form_page_3.php");
		}
	}

?>
<html>
	<head>
		<style type="text/css">
			.error {color:red;}
			.question 
			{
				color:orange;
				font-size:larger;
			}
		</style>
	</head>
	
	<body>
		<h2>Personality Test Page 2</h2>
		<p>Animals are awesome! Or are they? Hm.....</p>
		
		<form action="" method="get">
			
			<span class="question"><?php echo $q3; ?></span>
			<div class="error"><?php echo $errorMessage1; ?></div><br />
			<input type="radio" name="q3" value="a" /><?php echo $a3a; ?><br />
			<input type="radio" name="q3" value="b" /><?php echo $a3b; ?><br />
			<input type="radio" name="q3" value="c" /><?php echo $a3c; ?><br />
			<input type="radio" name="q3" value="d" /><?php echo $a3d; ?><br /><br />
			
			<span class="question"><?php echo $q4; ?></span>
			<div class="error"><?php echo $errorMessage2; ?></div><br />
			<input type="radio" name="q4" value="a" /><?php echo $a4a; ?><br />
			<input type="radio" name="q4" value="b" /><?php echo $a4b; ?><br />
			<input type="radio" name="q4" value="c" /><?php echo $a4c; ?><br />
			<input type="radio" name="q4" value="d" /><?php echo $a4d; ?><br /><br />
			
			<input type="submit" name="submit" value="continue" />
			
		</form>
	</body>
</html>