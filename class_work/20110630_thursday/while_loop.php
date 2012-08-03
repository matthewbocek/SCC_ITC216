<?php
/*
 * Create a while loop that loops from
 * 1 to 10 and displays the numbers each on their
 * own line
 */
 
 echo "<h3>While: Counting from 1 to 10</h3>";
 
 $number = 1;
 
 while ($number <= 10)
 {
 	echo "$number <br />"; 
	$number ++;	// this could also be $number+=1;
 }
 
 
 //Loop from 2 to 40 by 2's
 
 echo "<h3>While: looping from 2 to 40 by 2s</h3>";
 
 $number = 2;
 
 while ($number <= 40)
 {
 	echo "$number <br />";
	$number += 2;
 }
 
 //Loop from 10 to 10
 
 echo "<h3>Counting from 10 to 1</h3>";
 
 $number = 10;
 
 while ($number >=1)
 {
 	echo "$number <br />";
	$number --;	//this could also be -=1 (minus minus)
 }
 
?>