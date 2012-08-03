<?php
//function_2.php

//declare variable
$num1=0;
$num2=0;

//function
function displayCount($num1, $num2)
{
	if($num1<$num2)
	{
		echo "My list of numbers is <br />";
		for($i=$num1;$i<=$num2;$i++)
		{
			echo "$i<br />";
		}
	}
	else
	{
		echo "My list of numbers is<br />";
		for($i=$num1;$i>=$num2;$i--)
		{
			echo "$i<br />";
		}
	}
}

/*
 * Create a function called sum that adds two numbers and
 * returns the sum
 */

function sum($num1, $num2)
{
	for($i=$num1; $i <= $num2; $i++)
	{
		$total += $i;
	}
	return $total;
}

function multiplier($num1=1, $num2=1, $num3=1, $num4=1, $num5=1)
//setting variables equal to a "default variable" (for multiply use 1)
//this way, when you call the function, if you use fewer than 5 arguments,
//the remaining arguments will be passed in as 1, and multiplying any number by
//one results in itself.
{
	return $num1*$num2*$num3*$num4*$num5;
}

//Create a function that accepts an array and displays it as an html list.

//declare array
$classes = array();
$classes[0]="ITC110";
$classes[1]="CSC110";
$classes[2]="NET110";
$classes[3]="WEB110";
$classes[4]="ITC220";
$classes[5]="ITC179";
$classes[6]="ITC280";
$classes[7]="ITC255";

//delcare variable
$index=0;

function displayAsList($classes)
{
	echo "<ul>";
	
	foreach($classes as &$listItem)
	{
		echo "<li> $listItem </li>";
	}
	
	echo "</ul>";
}

?>

<html>
	<body>
		<?php echo displayCount(17, 23) . "<br />"; ?>
		<?php echo "My sum is " . sum(17,23) . "<br />"; ?>
		<?php echo "The result of my multiplier is " . multiplier(2,4,6) . "<br />"; ?>
		<?php
			echo "<br />Classes I've taken include:";
			echo displayAsList($classes);
		?>
	</body>
</html>