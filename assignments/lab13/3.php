<?php

	/*
	 * ITC216, Tanya Sweeney
	 * Lab 13 - 1.php - "Umbrella" page
	 * Submitted 8/18/2011
	 */ 

	include("includes/product.php");
	session_start();
	include("includes/function.php");
	

	$shoppingList = getShoppingList();
		
	foreach($shoppingList as $item)
	{
		$shoppingList->title;
		$shoppingList->description;
		$shoppingList->price;
		$shoppingList->src;
	}
	
		echo "<h3>" . $shoppingList[3]->title . "</h3><br />";
		echo "Description: " . $shoppingList[3]->description . "<br />";
		echo "Price: $" . $shoppingList[3]->price . "<br />";
		echo "<img src='images/" . $shoppingList[3]->src . "' />";

?>