<?php
/*
 * drop_down_menu.php
 */
 
 $sizes = array();
 $sizes["choose a size"] = "";
 $sizes["x small"] = "";
 $sizes["small"] = "";
 $sizes["medium"] = "";
 $sizes["large"] = "";
 $sizes["x large"] = "";
 
 $sizeMessage="";
 
 if(isset($_GET["submit"]))
 {
 	$size=$_GET["size"];
	$sizes[$size]="selected='selected'";
	
	$sizeMessage = "Yay! You want $size!";
 }

?>

<html>
	<body>
		<form action="" method="get">
				
				<select name="size">
					
					<?php
						foreach($sizes as $size => $isSelected)//records which item we selected
						{
							echo "<option $isSelected>$size</option>";
						}
					?>
					<!--
					<option value="choose a size">choose a size</option>
			  		<option value="xsmall">x small</option>
					<option value="small">small</option>
					<option value="medium">medium</option>
					<option value="large">large</option>
					<option value="xlarge">x large</option>
					-->
				</select><br /><br />
				
				<input type="submit" name="submit" value="continue" /><br />
			<?php echo "<br />" . $sizeMessage; ?>	
		</form>
	</body>
</html>
 
