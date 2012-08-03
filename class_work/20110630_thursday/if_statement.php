<?php
/*
 * Create a variable to represent the age of the user
 * then we'll display a different message based on their age
 */
 
 $age = 5;
 
 if($age < 6)
 {
 	echo "You are super little!";
 }
 elseif($age < 13)
 {
 	echo "You are almost a teen!";
 }
 elseif($age < 20)
 {
 	echo "Teen";
 }
 else
 {
 	echo "Old!";
 }
?>