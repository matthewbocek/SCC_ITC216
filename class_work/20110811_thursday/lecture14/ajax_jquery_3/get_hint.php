<?php
	/*
	 * step 1:  read in the names from name_list.txt
	 * step 2:  display all the names each on a new line use a while loop
	 * step 3:  get userName from $_POST and display before the other names
	 */
	define("USER_FILE", "name_list.txt");
	
	$userName = $_POST["userName"];

	$userName = trim(strtolower($userName));	//take away whitespace and make little
	
	
	if(file_exists(USER_FILE))
	{
		$file = fopen(USER_FILE, "r");
		
		while(!feof($file))
		{
			$fName = trim(strtolower(fgets($file)));
			
			if(strlen($userName) <= strlen($fName) && strlen($userName) != 0)
			{
				if(substr_compare($fName, $userName, 0, strlen($userName)) == 0)
				{
					$result .= $fName . "<br />";
				}
			}
		}
	}
	echo $result;
?>






