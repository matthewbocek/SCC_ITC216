<?php
	/*
	 * step 1:  read in the names from items.txt
	 * step 2:  display all the items each on a new line use a while loop
	 * step 3:  get userName from $_POST and display before the other names
	 */
	define("FILE", "items.txt");
	
	$product = $_POST["product"];

	$product = trim(strtolower($product));	//take away whitespace and make little
	
	
	if(file_exists(FILE))
	{
		$file = fopen(FILE, "r");
		
		while(!feof($file))
		{
			$fName = trim(strtolower(fgets($file)));
			
			$fName = explode(";", $fName);
			
			if(strlen($product) <= strlen($fName) && strlen($product) != 0)
			{
				if(substr_compare($fName[0], $product, 0, strlen($product)) == 0)
				{
					$result .= $fName[0] . "<br />";
					$description .= $fName[1] . "<br />";
					$price .= $fName[2] . "<br />";
					$image .= $fName[3] . "<br />";
				}
			}
		}
	}
	echo "<h2>$result</h2>";
	echo "Description: " . $description . "<br />";
	echo "Price: " . $price . "<br />";
	echo "<img src='$image'>";
?>