<?php
/*
 * Make a variable to represen the day of the week
 * and display a message based on that day
 */
 
 $weekDay="Thursday";
 $weekDay=strtolower($weekDay);		//strtolower converts user input to lower case
 
 if ($weekDay == "monday")			//== is a comparison operator. If I accidentally
 {									//use single equal sign, each if statement
 	echo "No school today!!!";		//will evaluate the single equal sign as an
 }									//assignment operator and change the value to 
 elseif ($weekDay == "tuesday")		//whatever I assigned in the if statement, so the
 {									//if statement will always evaluate to true.
 	echo "School School School";
 }
 elseif ($weekDay == "wednesday")
 {
 	echo "Halfway through the week...";
 }
 else
 {
 	echo "Does not exist in my world.";
 }
 
?>