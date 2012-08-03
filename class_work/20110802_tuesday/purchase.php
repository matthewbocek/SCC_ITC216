<?php
	session_start();
	$fullName = false;
	$order = false;
	
	if(isset($_SESSION["first_name"]) && isset($_SESSION["last_name"]) &&
		isset($_GET["animal"]))
	{
		$fullName = $_SESSION["first_name"] . " " . $_SESSION["last_name"];
		$order=$_GET["animal"]; 
	}
?>
<html>
	<body>
		<?php if($fullName && $order)
		{
			echo "$fullName ordered a $order";
		}
		else
		{
			echo "Sorry you didn't complete your order";
		}
		?>
	</body>
</html>