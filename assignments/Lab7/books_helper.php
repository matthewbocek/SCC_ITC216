<?php
	define("FILE_NAME","books.txt");
	
	function validBook($bookName)
	{
		if(!file_exists(FILE_NAME)) return FALSE;
		
		$bookName = strtolower(trim($bookName));
		$file = fopen(FILE_NAME, "r");//open the list of valid names in read mode
		
		while(!feof($file))
		{
			$lineOfFile = strtolower(trim(fgets($file)));
			
			if(!lineOfFile) continue;
			
			if($lineOfFile == $bookName)
			{
				fclose($file);
				return TRUE;
			}
		}
		fclose($file);
		return FALSE;	
	}
?>