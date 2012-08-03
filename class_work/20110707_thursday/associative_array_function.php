<?php
/*
 * associative_array_function.php
 * 
 * Create a function that accepts two parameters:
 * 		1. An associative array of products to prices
 * 		2.	The name of a products
 * 
 * It will return the price of the pruduct.
 */
 
 //declare array
 $products = array();
 $products["icecream"]=3.49;
 $products["chocolate sauce"]=3.29;
 $products["chopped nuts"]=1.29;
 $products["whipping cream"]=1.48;
 $products["gummy worms"]=.69;
 
 //declare variable
 $item = "chopped nuts";
 
 //create function
 function getProductPrice($productList,$item)
 {
 	if(isset($productList[$item]))	//if item exists in the list
 	{
 		return $productList[$item];
 	}
	else "Not Available";
 }
?>

<html>
	<body>
		Cost of <?php echo $item; ?> is $
		<? echo getProductPrice($products, $item); ?>
	</body>
</html>