<html>
	<head>
		<style type="text/css">
			.error 
			{
				color:red;
			}
		</style>
		<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript">
			$(function()
			{
				$("#shirt_form").validate(	{
												submitHandler:orderShirt,
												invalidHandler:showErrorMessage
											});
			});
			
			function orderShirt()
			{
				$("#summary").html("");//clear out old summary
				$("#summary").load("includes/order_shirt.php",
									$("#shirt_form").serializeArray());
			}
			
			function showErrorMessage()
			{
				$("#summary").html("You need to fill out all the data");
			}
		
			
		</script>
	</head>
	<body>
		<h1>Shirt:</h1>
		
		<span id="summary"><?php include("includes/order_shirt.php"); ?></span>
		
		<form id="shirt_form" action="" method="post">
			<h3>Custom Text:</h3>
			<input type="text" name="custom_text" class="required" value="<?php echo $customText; ?>" />
			<span class="error"><?php echo $errorCustomText; ?></span>
			
			<h3>Color:</h3>
			<select name="color">
				<option>Red</option>
				<option>Blue</option>
				<option>Orange</option>
				<option>Green</option>
			</select><br /><br />
			
			<h3>Size:</h3>
			<select name="size">
				<option>XS</option>
				<option>S</option>
				<option selected="selected">M</option>
				<option>L</option>
				<option>XL</option>
			</select><br /><br />
			
			<input type="submit" name="submit" value="continue" />
		</form>
	</body>
</html>
