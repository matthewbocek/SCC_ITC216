<?php
/* ITC216 - Tanya Sweeney
 * lab6_welcome.php - welcome to your favorite foods
 * Submitted July 18, 2011
 */

$firstName = $_GET["first_name"];
$lastName = $_GET["last_name"];
$gender = $_GET["gender"];
$food = $_GET["food"];

echo "<h3>Welcome $firstName $lastName</h3><br />";
echo "Gender: $gender<br />";
echo "Favorite Food: $food";
?>