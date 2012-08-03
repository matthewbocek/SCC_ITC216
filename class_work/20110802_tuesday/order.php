<?php
	session_start();
	$welcomeMessage = false;

	if(isset($_SESSION["first_name"]) && isset($_SESSION["last_name"]))
	{
		$firstName = $_SESSION["first_name"];
		$lastName = $_SESSION["last_name"];
		$welcomeMessage = "Welcome $firstName $lastName";
	}
?>
<html>
	<body>
		<?php if($welcomeMessage): ?>
			<h3><?php echo $welcomeMessage; ?></h3>
			
			<form action="purchase.php" method="get">
				
			<!--	We're using sessions to pass our data to the next page,
					so we don't need hidden fields to pass the data.
					
				<input type="hidden" name="first_name" 
					value="<?php echo $firstName; ?>" />
					
				<input type="hidden" name="last_name" 
					value="<?php echo $lastName; ?>" />
			-->
					
				What would you like?
				<select name="animal">
					<option>Mouse</option>
					<option>Bird</option>
					<option>Cat</option>
					<option>Dog</option>
					<option>Frog</option>
				</select><br />
				
				<input type="submit" name="submit" value="continue" />
			</form>
		<?php else: ?>
			Sorry you are not logged in
		<?php endif; ?>
	</body>
</html>




