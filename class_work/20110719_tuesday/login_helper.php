<?php
	#login_helper.php
	
	define("FILE_NAME", "names.txt");
	
	//function validUser validates user-input first and last names
	//against lines in the names.txt file.
	function validUser($firstName, $lastName)//calling $firstName 
	{
		if(!file_exists(FILE_NAME)) return false;//no validation if file is missing
		
		$firstName = strtolower(trim($firstName));//convert user-input first name to lower
		$lastName = strtolower(trim($lastName));//convert last name to lowercase
		$file = fopen(FILE_NAME, "r");//open the list of valid names in read mode
		
		while(!feof($file))
		{
			$lineOfFile = strtolower(trim(fgets($file)));
			
			if(!lineOfFile) continue;
			
			$personDataArray = explode(",", $lineOfFile);//converts names to array
			$fFirstName = trim($personDataArray[0]);//converts first column to $fFirstName 
			$fLastName = trim($personDataArray[1]);//second column to $fLastName
			
			//echo "|$firstName| to |$lineOfFile|<br />";//An excellent debugging tool!
			if($firstName ==$fFirstName && $lastName == $fLastName)
			{
				fclose(($file));
				return TRUE;
			}
		}
		
		fclose($file);
		
		return false;
	}
?>