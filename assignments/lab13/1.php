<?php

	/*
	 * ITC216, Tanya Sweeney
	 * Lab 13 - 1.php - "Pretty Shoes" page
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
	
		echo "<h3>" . $shoppingList[1]->title . "</h3><br />";
		echo "Description: " . $shoppingList[1]->description . "<br />";
		echo "Price: $" . $shoppingList[1]->price . "<br />";
		echo "<img src='images/" . $shoppingList[1]->src . "' />";

?>