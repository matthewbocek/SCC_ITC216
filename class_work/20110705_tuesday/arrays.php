<?php
echo "<h3>To Do List</h3>";
$i=0;

//$list=Array('Homework','Laundry','Dishes','Hang with Warren','Hang with sis','Visit grandma');

/*
$list=array();
$list[0]="Homework";
$list[1]="Laundry";
$list[2]="Dishes";
$list[3]="Hang with Warren";
$list[4]="Hang with Sis";
$list[5]="Visit Grandma";
  
array_push($list,"Sing");//allows us to add an item to the end of a list. Array_push can be
//out of flow, but it needs to be after the array has been created.
array_multisort($list);
*/
 
 $list=array('Laundry','Dishes','Hang with Warren','Hang with sis','Visit Grandma');

for($i=0;$i<sizeof($list);$i++)//Use less than sizeof list because there are x+1 items
//in the list, but index starts with zero, so index is one less than count.
{
	echo "$list[$i]<br />";
}

//following are three methods for seeing elements of an array.

echo "<h3>print_r for testing</h3>";
print_r($list);

echo "<h3>var_export for testing</h3>";
var_export($list);

echo "<h3>var_dump for testing</h3>";
var_dump($list);

echo "<h3>Now display using a foreach loop</h3>";

foreach($list as $item)//foreach is mostly used with arrays. It knows it will
//loop through each element of a collection, such as an array.
{
	echo "$item<br />";
}


?>