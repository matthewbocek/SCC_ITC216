<?php
	$cityStates = array();
	$cityStates["washington"] = array("Seattle", "Olympia", "Tacoma");
	$cityStates["california"] = array("San Francisco", "Los Angeles", "San Diego");
	$cityStates["texas"] = array("Dallas", "Austin", "Houston");
	$cityStates["florida"] = array("Miami", "Sarasota");
	
	echo "<h3>Here's my first pass at using a 2-d associative array.</h3>";
	
	echo ucfirst($cityStates["california"][1]);
	
	echo "<h3>Here's a pass at trying to get the full array to show up.</h3>";	
	
	foreach($cityStates as $state => $cities)
	{
				foreach ($cities as $city)
		{
			echo (ucfirst($city) . ", ");
		}
		echo ("are in " . ucfirst($state) . ".<br />");
	}
?>