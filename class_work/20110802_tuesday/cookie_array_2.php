<?php #cookie_array_2.php

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
			//if no cookie yet, create grocery array
			setcookie(G_LIST . "[0]", $item);
			
			//concatenate first item into array
			array_push($items, $item);
		}//end if(!isset($_COOKIE[G_LIST]))
		else
		{
			$items = $_COOKIE[G_LIST];	//second or later item - items array = the list fromt the cookie
			$nextIndex = sizeof($items);	//get the index (count of array minus 1)
			array_push($items, $item);	//add newest item to end of array
			setcookie(G_LIST . "[$nextIndex]", $item);//reset cookie to array
		}//end else
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