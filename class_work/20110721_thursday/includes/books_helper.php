<?php
//books_helper.php

	define("FILE_NAME", "includes/books.txt");

	function getBookOptions($selectedBook)//will make option tags for use in drop-down menu
	{
		//$selectedBook = "Moby Dick";//temporarily hard-coding selected book for testing purposes
		//$selectedBook = $_GET["books"]//could get the book. Bad; tight coupling
		
		if(!file_exists(FILE_NAME)) return;//if the file doesn't exist, stop right here.
		
		$file = fopen(FILE_NAME, "r");//file open the file in read mode
		
		$optionList="";
		
		while(!feof($file))//while we're not at file end of file ($file)
		{
			$fileLine = trim(fgets($file));
			if($fileLine == "") continue;
			
			$bookData = explode(";", $fileLine);
			$isSelected = "";
			if(trim($bookData[0]) == trim($selectedBook))
			{
				$isSelected = "selected = 'selected'";
			}
			$optionList .= "<option $isSelected>$bookData[0]</option>";
		}
		
		fclose($file);
		return $optionList;
	}
	
	function getBookData($selectedBook)
	{
		if(!file_exists(FILE_NAME)) return;//if the file doesn't exist, stop right here.
		$file = fopen(FILE_NAME, "r");//file open the file in read mode
		
			while(!feof($file))//while we're not at file end of file ($file)
			{
			$fileLine = trim(fgets($file));//
			if($fileLine == "") continue;
			
			for($i=0;$i<sizeof($bookData); $i++)
			{
				$bookdata[$i] = trim($bookData[$i]);
			}
			
			$bookData = explode(";", $fileLine);
			if ($bookData[0] == $selectedBook)
			{
				fclose ($file);
				return $bookData;
			}
			
			$optionList .= "<option $isSelected>$bookData[0]</option>";
		}
	}
	
	function addBookToFile($bookName, $author, $price)
	{
		$bookDataString = "\n$bookName;$author;$price";
		return file_put_contents(FILE_NAME, $bookDataString, FILE_APPEND);
		
		//FILE_APPEND causes the new book to be added to the end instead of it overwriting
		//the existing file.
	}
?>