<?php
/*
 * ITC216 - Tanya Sweeney - Submitted 7/20/2011
 * Lab 8, dictionary.php - this page displays the words and definitions in the
 * include/word.txt file and has links to a "search" page and an "add word" page.
 */
 
	include("includes/dictionary_helper.php");
	
	echo "<h3>Dictionary</h3><br />";
	echo getItemsFromFile($selectedItem);
	
	echo "<br /><br />";
	
	echo "<a href='search.php'>Search</a>";
	echo "&nbsp &nbsp &nbsp";
	echo "<a href='add_word.php'>Add A Word</a>";
?>