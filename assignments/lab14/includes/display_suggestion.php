<?php
	/*
	 * step 1:  read in the names from items.txt
	 * step 2:  display  the items each on a new line use a while loop
	 * step 3:  get userName from $_POST and display before the other names
	 */
	define("FILE", "items.txt");

	function getSuggestion($lineNum)
	{
		if(!file_exists(FILE))
		{
			return false;
		}
		
		$fileContents = file_get_contents(ADD_LIST);
		$line = explode("\n", $fileContents);
		
		$lineNum = $lineNum% sizeof($lines);
		
		if(isset($lines[$lineNum]))
		{	
			return explode(";", $lines[$lineNum]);
		}	
	}

?>