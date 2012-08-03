<?php
	define("BLANK_ERROR", "* blank");
	include("functions.php");

	$customText = "";
	$color = "";
	$size = "";
	
	$errorCustomText = "";
	
	$successMessage = false;
	
	if(isset($_POST["submit"]))
	{
		$customText = $_POST["custom_text"];
		$color = $_POST["color"];
		$size = $_POST["size"];

		if(empty($customText))
		{
			$errorCustomText = BLANK_ERROR;
			echo "Sorry we couldn't add your shirt.";
		}
		else if(addShirtToFile($customText, $color, $size))
		{
			echo "Yay! You added a $size $color shirt with '$customText' on it!";
		}
	}
?>