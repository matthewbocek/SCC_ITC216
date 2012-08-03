<?php
//switch_case.php

$weekDay = "Tuesday";
$weekDay = strtolower($weekDay);

switch($weekDay)					//switch part of switch case statement
{
	case "monday":					//case part of switch case statement
		echo "No school for you!";
		break;						//break kicks you out of the switch case
	case "tuesday":
		echo "school school school";
		break;
	case "wednesday":
		echo "Middle of the week...";
		break;
	default:
		echo "I don't care about that day.";
}

?>