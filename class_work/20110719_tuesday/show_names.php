<?php
#show_names.php

if(file_exists("names.txt"))
{
	$file = fopen("names.txt", "r");//name of file, "r" means open in "read" mode
	
	while(!feof($file))//feof = "file end of file"; this loop loops until end of file.
	{
		$lineOfFile = strtolower(trim(fgets($file)));//fgets = "f get string";
		//get a line from the file
		echo $lineOfFile . "<br />";
	}
	
	fclose($file);//closes file. This is so that if you need to read from it later,
	//it starts over at the top. Otherwise it would start reading where you left off
	//(at the bottom, after all the text!).
}

?>