<?php

	/*
	 * ITC216, Tanya Sweeney
	 * Lab 13 - shopping_list.php (landing/main page)
	 * Submitted 8/18/2011
	 */ 

	include("includes/product.php");
	session_start();
	include("includes/function.php");
	
	echo "<h1>Shopping List</h1>";

	$shoppingList = getShoppingList();
		
	foreach($shoppingList as $item)
	{
		$shoppingList->title;
		$shoppingList->description;
		$shoppingList->price;
		$shoppingList->src;
	}
	
	for($i=0; $i<sizeof($shoppingList); $i++)
	{
		echo "<img src='images/" . $shoppingList[$i]->src . "' />";
		echo "<h3><a href='$i.php'>" . $shoppingList[$i]->title . "</a></h3><br />";
	}


?>