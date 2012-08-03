<?php
/*
 * ITC216, Tanya Sweeney, Lab 10, submitted 7/28/2011
 * ads_helper.php
 * holds functions associated with lab 10, ads.php
 */
 
 define ("FILE_NAME", "content.txt");//we will extract data from a file called "content.txt"
 
/*
 * This function will gather info for display in our advertisement.
 */

function getAdInfo($i)
{
	if(!file_exists(FILE_NAME)) echo "FILE IS MISSING. FIX IT!!!";
	
	$file = fopen(FILE_NAME, "r");//open the file in read mode.
		
	while (!feof($file))//loop through this loop until the end of the file
	{
		$adCopy = fgets($file);//our ad copy will come from the contents of the file
		
		if($adCopy == "") continue;//our function will keep going if it encounters a blank line in the file
		
		$arrayFromFile = explode(";", $adCopy);//semicolon delimited file data will be exploded into an array
		$index = trim($arrayFromFile[0]);
		$title = trim($arrayFromFile[1]);
		$description = trim($arrayFromFile[2]);
		$price = trim($arrayFromFile[3]);
		$image = trim($arrayFromFile[4]);
		
		//echo "|$index| to |$i| and |$title| plus |$description| plus |$price| plus |$image|<br />";//great testing tool
		
		if($index == $i)//enter this loop only when $i from ou ads.php page equals $index
		{
			fclose($file);//close the file
			
			//return "|$index| to |$i| and |$title| plus |$description| plus |$price| plus |$image|";//testing tool
			
			//this multi-line return statement returns the entire ad copy, already formatted in html tags, so it can
			//be echoed as-is on the ads.php page. Makes the ads.php page deceptively, almost ridiculously simple.
			//Took me hours to figure out this was how I wanted to do it tho.
			return "<h1>$title</h1>
			<p>Description: $description</p>
			<p>Price: $price</p>
			<img src='images/$image' />";
		}
	}
}


?>