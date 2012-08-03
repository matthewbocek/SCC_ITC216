<?php
/*
 * welcome.php - receives data from
 * form_with_radio.php
 * via $_GET statements on both pages
 */
 
 $outfitColor=$_GET["outfit_color"];
 $dancesChecked=$_GET["dance_with_me"];

echo "<h3>Welcome!</h3><br />";
echo "Nice $outfitColor outfit!<br />";
echo "Thanks so much for saying '$dancesChecked' when I asked you to dance!";

?>