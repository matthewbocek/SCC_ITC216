<?php
$userName = "";
$visits = 1;
$errorUserName = "";
$successMessage = false;

if(isset($_GET["submit"]))
{
	$userName = $_GET["user_name"];
	if(empty($userName))
	{
		$errorUserName = "* blank";
	}
	else
	{
		$successMessage = "Hi $userName";
		setcookie("user_name", $userName, time() + 60*60);
	}
}
else
{
	if(isset($_COOKIE["user_name"]))
	{
		$userName = $_COOKIE["user_name"];
	}
	
	if(isset($_COOKIE["visits"]))
	{
		$visits += $_COOKIE["visits"] % 5;//the mod division causes # of visits to
		//keep starting over after 5 so you can loop through just 5 pictures over
		//and over.
	}
	
	setcookie("visits", $visits, time() + 60*60*24*365);
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
		<form action="" method="get">
			User Name:
			<input type="text" name="user_name" value="<?php echo $userName; ?>" />
			<span class="error"><?php echo $errorUserName; ?></span><br /><br />
			
			<input type="submit" name="submit" value="go" />
		</form>
		<div><?php echo $successMessage; ?></div>
		<div><?php echo "You've visted $visits time(s)!"; ?></div>
	</body>
	
</html>