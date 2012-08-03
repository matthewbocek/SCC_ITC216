<?php
//for loop where number 5 says 5 is special

echo "<h3>Five is special!</h3>";
for($i=1;$i<10;$i++)
{
	echo "$i";
	
	if($i==5) echo " is special";
	
	echo "<br />";
}
?>