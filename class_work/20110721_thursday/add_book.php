<?php
//add_book.php

include("includes/books_helper.php");

define ("ERROR_BLANK", "* Blank");
define ("ERROR_PRICE", "* Not a valid number");
define ("ERROR_ADD_BOOK", "Error adding the book to the file");

$bookName = "";
$author = "";
$price = "";
$successState = FALSE;

$errorBookName = "";
$errorAuthor = "";
$errorPrice = "";
$errorAdding = "";

if(isset($_GET["submit"]))
{
	$bookName = $_GET["book_name"];
	$author = $_GET["author"];
	$price = $_GET["price"];
	$successState = TRUE;
	
	if(empty($bookName))
	{
		$errorBookName = ERROR_BLANK;
		$successState = FALSE;
	}
	
	if(empty($author))
	{
		$errorAuthor = ERROR_BLANK;
		$successState = FALSE;
	}
	
	if(!is_numeric($price) || $price<0)
	{
		$errorPrice = ERROR_PRICE;
		$successState = FALSE;
	}
	
	if($successState && !addBookToFile($bookName, $author, $price))
	{
		$errorAdding = ERROR_ADD_BOOK;
		$successState = FALSE;
	}
}


?>

<html>
	
	<head>
		<style type="text/css">
			.error
			{
				color:red;
			}
		</style>
	</head>
		
	<body>
		<h3>Add Books</h3>
		<form action = "" method = "get">
			Book Name:
			<input type="text" name="book_name" value="<?php echo $bookName; ?>" />
			<span class="error"><?php echo $errorBookName; ?></span><br />
			
			Author:
			<input type="text" name="author" value="<?php echo $author; ?>" />
			<span class="error"><?php echo $errorAuthor; ?></span><br />
			
			Price:
			<input type="text" name="price" value="<?php echo $price; ?>" />
			<span class="error"><?php echo $errorPrice; ?></span><br /><br />
			
			<input type="submit" name="submit" value="Add to library" /><br /><br /> 
		</form>
		
		<br /><span class="error"><?php echo $errorAdding; ?></span>
		<?php if ($successState): ?>
			<?php echo $bookName; ?> was added to your library.
		<?php endif; ?><br /><br />
		
		<a href="book_info.php">Display List</a>
		
	</body>
</html>
