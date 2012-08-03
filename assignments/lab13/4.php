<?php

	/*
	 * ITC216, Tanya Sweeney
	 * Lab 13 - 1.php - "Coffee" page
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
	
		echo "<h3>" . $shoppingList[4]->title . "</h3><br />";
		echo "Description: " . $shoppingList[4]->description . "<br />";
		echo "Price: $" . $shoppingList[4]->price . "<br />";
		echo "<img src='images/" . $shoppingList[4]->src . "' />";

?>