<?php

//declare variables
$firstName="Tanya";
$lastName="Sweeney";

//function
function displayHello($firstName, $lastName)
{
	return "<h3>$firstName $lastName</h3>";
}
?>

<!--display output-->
<html>
	<body>
		<?php echo displayHello($firstName, $lastName); ?>
		<?php echo displayHello("Warren", "Woo"); ?>
		<?php echo displayHello("Jessica", "Sweeney"); ?>
	</body>
</html>