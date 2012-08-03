 <?php
/*
 * form_with_radio.php
 */

$outfitColor = "";

$dancesChecked=array();
$dancesChecked["Yes"]="";
$dancesChecked["No"]="";
$dancesChecked["Maybe"]="";
$dancesChecked["Let's see if I get other offers"]="";

$errorOutfitColor = "";
$errorDanceWithMe = "";

if(isset($_GET["dance_button"]))
{
	$outfitColor = $_GET["outfit_color"];
	$successState = TRUE;
	
	if(empty($outfitColor))
	{
		$errorOutfitColor = "*blank";
		$successState = FALSE;
	}
	
	if(!isset($_GET["dance_with_me"]))
	{
		$errorDanceWithMe = "*must pick one";
		$successState = FALSE;
	}
	else
	{
		$danceRadio = $_GET["dance_with_me"];
		$dancesChecked[$danceRadio] = "checked='checked";
	}
	
	if($successState)
	{
		header("Location:welcome.php?outfit_color=$outfitColor&dance_with_me=$danceRadio");
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
		<form action="" method="get">
			Outfit Color:
			<input type="text" name="outfit_color" value="<?php echo $outfitColor; ?>" />
			<span class="error"><?php echo $errorOutfitColor; ?></span><br /><br />
			
			Dance with me?
			<span class="error"><?php echo $errorDanceWithMe; ?></span><br />
			<?php
				foreach($dancesChecked as $value => $ischecked)
				{
					echo "<input type='radio' name='dance_with_me' value=\"$value\" />$value<br />";
				}
			?>
			
			
			<!--
			<input type="radio" name="dance_with_me" value="Yes" />Yes<br />
			<input type="radio" name="dance_with_me" value="No" />No<br />
			<input type="radio" name="dance_with_me" value="Maybe" />Maybe<br />
			<input type="radio" name="dance_with_me" value="Let's see if I get other offers" />Let's see if I get other offers<br />
			<br />
			-->
			
			<input type="submit" name="dance_button" value="continue" />
		</form>
	</body>
</html> 