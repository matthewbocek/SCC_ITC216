<?php

#Tanya Sweeney
#ITC216, Lab 3
#lab3.php
#7/5/2011

echo "<h2>Tanya Sweeney, PHP216, Lab 3</h2><br />";

echo "<h3>Part 1 - For with If</h3>";
echo "<p>Use a for loop and if statement to display the numbers 1 through 10.<br />";
echo "Do not display a comma after the last number.</p>";

//declare variable
$i=1;

//for statement
for($i=1;$i<=10;$i++)
{
	if ($i == 10)
	{
		echo $i;		//removes comma from last number
	}
	else
	{
		echo "$i, ";	//displays 1-9, with commas and spaces
	}
}

echo "<h3>Part 2 - Arrays</h3>";

echo "<p>Create and display a shopping list.</p>";

//declare array
$list = array("Spaghetti sauce", "Parmesan cheese", "8-gig thumb drive", "Almonds", "Q-tips", "TP from Costco");

foreach($list as $item)
{
	echo "$item<br />";
}

echo "<h3>Part 3 - Associative Arrays</h3>";

echo "<p>Make an associative array showing the shopping list with prices.";
echo "Use a foreach loop to display the items and prices in the list.</p>";

$list = array();
$list["Spaghetti sauce"]=3.79;
$list["Parmesan cheese"]=5.22;
$list["8-gig thumb drive"]=22.99;
$list["Almonds"]=17.50;
$list["Q-tips"]=4.29;
$list["TP from Costco"]=22.99;

foreach($list as $item => $price)
{
	echo "$item, $$price<br />";
}
?>