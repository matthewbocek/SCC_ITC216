<?php
//books_info.php
	
	include("includes/books_helper.php");//holder for functions necessary for this application to run
	
	$selectedBook = "";
	$bookData = false;
		 
	if(isset($_GET["submit"]))
	{
		$selectedBook = $_GET["book"];
		$bookData = getBookData($selectedBook);
	}

?>

<html>
	<head>
		
	</head>
	
	<body>
		<form action="" method="get">
			<h3>Choose a book:<br /></h3>
			<select name="book" value="book">
				<?php echo getBookOptions($selectedBook); ?>
			</select><br /><br />
			
			<input type="submit" name="submit" value="View Details" /><br />
						
		</form>
	</body>
</html>
<?php
	
	if(isset($_GET["submit"]))
	{
		echo "<h3>$bookData[0]</h3>";
		echo "by: $bookData[1]<br />";
		echo "Price \$$bookData[2]<br />";
	}
	
	echo "<br /><br /><a href='add_book.php'>Add a Book</a>";
	
?>
