<?php
/*
 * Loop throught he list of images
 * and display them in image tags
 */
 
 define ("FILE_NAME", "image_list.txt");
 
 function displayImages()//stubbed out function
 {
 	if(!file_exists(FILE_NAME)) return "FILE_NAME does not exist! Fix it!";
 	
	$file = fopen (FILE_NAME, "r");
	
	while(!feof($file))
	{
		$fileLine = trim(fgets($file));
		
		echo "<img src='images/$fileLine' /><br />";
	}
	fclose($file);
 }
 
 displayImages();//call to stubbed out function

?>