<?php
/*
 * Tanya Sweeney, ITC216, Lab 8 - dictionary_helper.php, submitted 7/21/2011
 */

define("FILE_NAME", "includes/words.txt");

//This function creates a list of items from the file for display on the front page.
//In our case, words and their definitions, for the dictionary page.
function getItemsFromFile($selectedItem)
{
	//if no such file, end function and show an error message on dictionary page.
	if(!file_exists(FILE_NAME)) return "FILE IS MISSING. FIX IT!!";
	
	$listOfItems = "";//this will eventually expose the array.
	$file = fopen(FILE_NAME, "r");//fopen the file in read mode.
	
	while(!feof($file))//do this loop until the end of the file.
	{
		$fileLine = fgets($file);//this variable will represent a line from the file.
		if($fileLine == "") continue;//if the program encounters a blank line, keep going.
		
		$arrayFromFile = explode(";", $fileLine);//turn the file contents into an array
		$item0 = trim($arrayFromFile[0]);//first column.
		$item1 = trim($arrayFromFile[1]);//second column.
		
		$listOfItems .= strtoupper($item0) . ": " . strtolower($item1) . "<br />";
	}//end while(!feof($file))
	
	return $listOfItems;//This exposes the list that will be used on the dictionary page.
	fclose($file);//closes out the file.
	
}//end function getItemsFromFile($selectedItem)


//This function will check to see if the word the user is looking up is
//in the words.txt file as a defined word.
function ValidDictionaryWord($word)
	{
		//if no such file, end function and show an error message on the search page.
		if(!file_exists(FILE_NAME)) return "FILE IS MISSING. FIX IT!!";
		
		$word = strtolower(trim($word));//convert user-input word to lowercase
		$file = fopen(FILE_NAME, "r");//open the list of valid words in read mode
		
		while(!feof($file))
		{
			$fileLine = strtolower(trim(fgets($file)));
			
			if($fileLine == "") continue;
			
			$arrayFromFile = explode(";", $fileLine);//file contents become an array
			$item0 = trim($arrayFromFile[0]);//first column: dictionary word
			$item1 = ($arrayFromFile[1]);//second column: dictionary definition
					
			//echo "|$item0| to |$word|<br />";//An excellent debugging tool!
			if($word == $item0)
			{
				fclose(($file));
				return $item1;//return the definition
			}
		}
		
		fclose($file);
		
		return false;
	}//end validWord function
	
	
	function addWordToFile($word, $definition)
	{
		$wordDataString = "\n$word;$definition";
		return file_put_contents(FILE_NAME, $wordDataString, FILE_APPEND);
	}


?>