<?php #grocery_list.php

define ("G_LIST", "grocery_list");

$item = "";
$items = array();
$errorMessage = "";
$successMessage = "";

if (isset($_GET['add']))
{
	$item = $_GET["item"];
	
	if ($item == "")
	{
		$errorMessage="* Blank";
	}//end if($item == "")
	
	else
	{
		$successMessage = "You added $item to your list";
		if(!isset($_COOKIE[G_LIST]))
		{
			//if no cookie yet, set cookie to current item
			setcookie(G_LIST, $item);
			
			//array_push concatenates the second item onto the end of the first item
			array_push($items, $item);
		}
		else
		{
			//step 1: read existing cookie
			//step 2: explode ';' into array (both steps with 1 line of code!)
			$items = explode(";", $_COOKIE[G_LIST]);
			
			//step 3: push new item onto end of array
			array_push($items, $item);
			
			//step 4: implode list on ';' back into cookie (2 lines of code)
			$itemsString = implode(";", $items);//converts array into semicolon delimited list
			setcookie(G_LIST,$itemsString);//converts list into cookie
		}
	}//end else
}//end if (isset($_GET['add']))

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
		<h3>Grocery List</h3>
		<ul>
		<?php
			foreach($items as $item)
			{
				echo "<li>$item</li>";
			}
		?>
		</ul>
		<form action = "" method = "get">
			Add Item
			<input type="text" name="item" value="<?php echo $item; ?>" />
			<span class="error"><?php echo $errorMessage; ?></span><br /><br />
			
			<input type="submit" name="add" value="add" />
			<p><?php echo $successMessage; ?></p><br /><br />
			
		</form>
	</body>
</html>