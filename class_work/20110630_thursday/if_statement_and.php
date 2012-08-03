<?php
/*
 * Create a variable to represent first name
 * Create another variable to represent last name
 * if the users name is tanya sweeney
 * 		give them the message "you are the admin"
 * if the users name is jessica sweeney
 * 		give them the message "You are a viewer"
 * otherwise
 * 		Give them the message "go away"
 */
 
 $firstName = "Jessica";
 $lastName = "Jordan";
 $firstName = strtolower($firstName);
 $lastName = strtolower($lastName);
 
 if($firstName == "tanya" && $lastName == "sweeney")//the && is an "and"
 {
 	echo "$firstName , you are the admin.";
 }
 elseif ($lastName == "sweeney" || $lastName == "jordan")//the || is an "or"
 {
 	echo "$firstName , you are a viewer.";
 }
 else
 {
 	echo "You are a stranger to me. Go Away!";
 }
?>