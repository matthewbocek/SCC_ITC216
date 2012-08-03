<?php
/*
 * ITC216 - Tanya Sweeney
 * Lab 4 - Functions
 * July 7, 2011 
 */
 echo "<h2>ITC216 - Tanya Sweeney</h2>";
 echo "<p>Lab 4 - Functions<br />July 7, 2011</p>";
 
 //Part 1 - create a function with three arguments that default to 1
 //that returns the average of the three numbers. Call the function with
 //6,4 and 12, and with no call parameters.
 
 function average($num1 = 1, $num2 = 1, $num3 = 1)
 {
 	return ($num1+$num2+$num3)/3;
 }
?>

<html>
	<body>
		<h3>Part 1 - Function with default peratmeters and return value</h3>
		<?php echo "The average of 6, 4 and 12 is: " . number_format(average(6,4,12),2) . "<br />"; ?>
		<?php echo "The default average is: " . number_format(average(),2); ?>
	</body>
</html>

<?php

//Part 2 - Create an associative array of book titles and their prices. The function will
//take in a book title and return its price from the array if the title is a member
//of the array.

//Declare Array
$title = array();
$title["Melon Head"]=6.99;
$title["Ugly Pie"]=11.52;
$title["Big Words"]=6.60;
$title["Sleepy Bears"]=7;
$title["The Nappy House"]=6.95;
$title["Caps for Sale"]=8.95;

//Declare Book Title for use in function
$book="Ugly Pie";

//Declare function
function getBookPrice($bookTitle, $price)
{
	if (isset($bookTitle[$price]))	//if the item is a member of the array
	{
		return $bookTitle[$price];
	}
	else
	{
		return "not available";
	}
}
?>
<html>
	<body>
		<h3>Part 2 - Function returning results from an associative array</h3>
		<?php echo "The cost of $book is $" . getBookPrice($title, $book) ?>
	</body>
</html>