<?php
function switchVars(&$a, &$b)

/*
 * ampersands caused it to pass by reference.
 *
 * passing by reference is a lot more error prone, and it causes operations in
 * our function to impact variable values in the outside world.

 * BE CAREFUL using passing by reference!!!
 */

{
	$temp = $a;
	$a = $b;
	$b = $temp;
}

$a = 1;
$b = 2;

echo "<h3>Before</h3>";
echo "a: $a<br />";
echo "b: $b<br />";

switchVars($a, $b);

echo "<h3>After</h3>";
echo "a: $a<br />";
echo "b: $b<br />";

?>