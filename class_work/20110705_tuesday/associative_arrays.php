<?php

echo "<h3>Here's an associative array of some states and capitols:</h3>";
	$statesToCapitols = array();
	$statesToCapitols["washington"] = "Olympia";
	$statesToCapitols["california"] = "Sacremento";
	$statesToCapitols["texas"] = "Austin";
	$statesToCapitols["florida"] = "Talahassee";
	
	//$userState="California";
	$userState=strtolower($userState);
	
	//now display the capitol for each user state
	//use ucfirst() to convert first letter to uppercase
	
	foreach($statesToCapitols as $state => $capitol)//this is the "key/value" syntax
	{
		echo "The capitol of " . ucfirst($state) . " is $capitol.<br />";
	}
?>
