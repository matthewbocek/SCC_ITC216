<?php
//for loop where number 5 says 5 is special

echo "<h3>Five is special!</h3>";
for($i=1;$i<10;$i++)
{
	echo "$i";
	
	if($i==5) echo " is special";
	
	echo "<br />";
}
//rewrite with if...else

echo "<h3>Five is still special!</h3>";

for($i=1;$i<10;$i++)
{
	if($i==5)
	{
		echo "$i is still special<br />";
	}
	else
	{
		echo "$i<br />";	
	}
}

echo "<h3>Count to 15, skip 13 using NOT</h3>";
for($i=1;$i<=15;$i++)
{
	if($i!=13)
		{
			echo "$i<br />";
		}
	
}

echo "<h3>Count to 15, skip 13 using continue</h3>";
for($i=1;$i<=15;$i++)
{
	if($i==13) continue;//continue in this case causes it to skip this line with no echo
	echo "$i<br />";
}


?>