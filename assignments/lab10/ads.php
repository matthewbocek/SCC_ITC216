<?php
/*
 * ITC216, Tanya Sweeney, Lab 10, submitted July 28, 2011
 * ads.php
 * A page that displays a different advertisement each
 * time the site is visited, based on cookie data.
 */

 include ("ads_helper.php");
 
 $visits = 1;
  
 $visits += $_COOKIE["visits"] % 5;//the mod division causes # of visits to
 //keep starting over after 5 so you can loop through just 5 pictures over
 //and over.

 setcookie("visits", $visits, time() + 60*60*24*30);
 
 echo getAdInfo($visits);

?>
