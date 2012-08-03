<?php
/*
 * Tanya Sweeney
 * ITC216
 * June 30, 2011
 * Lab 2
 */
 
 //Part 1 - use variables
 echo "<h2>Lab 2 Part 1 - Variables</h2>";
 
 //Declare variables
 $firstName = Tanya;
 $lastName = Sweeney;
 $coffeeCompany = Starbucks;
 $coffeCost = 3.5;
 $tax = 1.15;
 
 //Header
 echo "<h3>$firstName $lastName</h3>";
 
 //next little statement
 echo "went to $coffeeCompany to buy a coffee for $coffeCost giving a total of " . number_format(($coffeCost*$tax),2);
 //Part 2 - use if statements
 echo "<h2>Lab 2 Part 2 - If Statements</h2>";
 
  $coffeCost = 4.07; //This is the actual cost of a venti latte
  //at the Starbucks I drive through on the way to school. :'( 
 
 //if statements
 if ($coffeCost >4)
 {
 	echo "That's ridiculous!!!! Stop this madness.";
 }
 else if ($coffeCost>3)
 {
 	echo "You may want to re-evaluate your spending.";
 }
 else if ($coffeCost >2)
 {
 	echo "This is somewhat reasonable, but do you want to spend this everyday.";
 }
 else
 {
 	echo "Oh that's a nice cheap coffee.";
 }
 
 //Part 3 - Loops
  echo "<h2>Lab 2 Part 3 - Loops</h2>";
  echo "<h3>Count from 5 to 20 by 3s using a while loop</h3>";
  
  //Declare counter variable
  $i=5;
  
  //While loop
  while ($i<=20)
  {
  	echo "$i<br />";
	$i+=3;
  }

echo "<br /><h3>Count from 5 to 20 by 3's using a for loop</h3>";

  for($j=5;$j<=20;$j+=3)
  {
  	echo "$j<br />";
  }
  
  echo "After the loop i is $i";
  
    
  echo "<br /><h3>...And count from 20 to 5 by 3's using a for loop, just for kicks</h3>";
  
  //I counted backward here just because I blew it up during class.
  //I wanted to prove to myself (and you) that I could get it, a couple hours later,
  //on the first pass. And I did. :D
  
 for($i=20;$i>=3;$i-=3)
 {
 	echo "$i<br />";
 }
  
?>