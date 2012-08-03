<?php
	
	define("FILE_NAME", "shopping_list.txt");
	
	function addShirtToFile($customText, $color, $size)
	{
		$dataLine = "$customText;$color;$size \n";
		return file_put_contents(FILE_NAME, $dataLine, FILE_APPEND);
	}
?>