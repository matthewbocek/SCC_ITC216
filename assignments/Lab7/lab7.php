<?php
include ("books_helper.php");


define("FILE_NAME", "books.txt");
define("BLANK_ERROR", "* Blank");
define("NOT_VALID_ERROR", "No such book.");

$bookName = "";
$errorBookName = "";
$successState = "";
$successMessage = "";

if(isset($_GET["continue"]))
{
	$bookName = $_GET["book_name"];
	$successState = TRUE;
	
	if(empty($_GET["book_name"]))
		{
			$successState = False;
			$errorBookName = BLANK_ERROR;
		}
	if($successState && !validBook($bookName))
		{
			$successState = False;
			$errorBookName = NOT_VALID_ERROR;
		}
	if($successState)
		{
			$successMessage = "Cool! You chose $bookName!";
		}
}

?>


<html>
	<!-- add red to error messages -->
	<head>
		<style type="text/css">
			.error
			{
				color:red;
			}
		</style>
	</head>
	
	<body>
	
		<h2>Check if a book is on the list!</h2>
		<h4>Books that will validate (so you can test it more easily):</h4>
		<ul>
		<li>Harry Potter</li>
		<li>The Bible</li>
		<li>Dune</li>
		<li>Emma</li>
		<li>A Tale of Two Cities</li></ul>
		
		
		<form action="" method="get">
			
			Book Name: <input type="text" name="book_name" value="<?php echo $bookName; ?>" />
			<span class="error"><?php echo $errorBookName; ?></span>
			<br /><br />
			<input type="submit" name="continue" value="continue" />
			
		</form>

		<h3><?php echo "$successMessage"; ?></h3>
		
	</body>
</html>