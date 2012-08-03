<?php

//Loop from 10 to 1 with a for loop
echo "<h3>Loop from 10 to 1 with a for loop</h3>";

for($i=10;$i>=1;$i--)
{
	echo "$i<br />";
}


//loop from 1 to 10 with a for loop

echo "<h3>Loop from 1 to 10</h3>";

for ($i = 1; $i <= 10; $i++) //declare variable (i = incrementer), set end condition, 
//and increment, all in one command!
{
	echo "$i<br />";
}

//Loop from 3 to 33 by 3's

echo "<h3>Looping from 3 to 33 by 3s</h3>";
for($i=3; $i<=33; $i+=3)
{
	echo "$i<br />";
}

?>