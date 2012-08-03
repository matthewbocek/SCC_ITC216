<?php

//Portia's code - make sure you understand what this means and how to do it yourself!!!

define ("ITEM_LIST","includes/items.txt");
define("SHOPPING_ITEMS","shopping_items");

function getShoppingList()
{
	if(!file_exists(ITEM_LIST)) return "No File. Fix it pronto.";
	$file = fopen(ITEM_LIST, "r");
	$items = array();
	while(!feof($file))
	{
		$fileLine = fgets($file);
		$lineArray = explode (";", $fileLine);
		$product = new Product($lineArray[0], $lineArray[1], $lineArray[2], $lineArray[3], $lineArray[4]);
		array_push($items, $product);
	}
	return $items;
}


?>