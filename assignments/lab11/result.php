<?php
/*
 * ITC216, Tanya Sweeney, Lab 11, result.php, submitted 8/16/2011
 */

	include("form_handler.php");
	
	session_start();
	
	$a1 = $_SESSION["q1"];
	$a2 = $_SESSION["q2"];
	$a3 = $_SESSION["q3"];
	$a4 = $_SESSION["q4"];
	$a5 = $_SESSION["q5"];
	$a6 = $_SESSION["q6"];
	$a7 = $_SESSION["q7"];
	
	$score=0;
	
	If($a1==a) $score += 1;
	if($a1==b) $score += 2;
	if($a1==c) $score += 3;
	if($a1==d) $score += 4;
	
	if($a2==a) $score += 1;
	if($a2==b) $score += 2;
	if($a2==c) $score += 3;
	if($a2==d) $score += 4;
	
	if($a3==a) $score += 1;
	if($a3==b) $score += 2;
	if($a3==c) $score += 3;
	if($a3==d) $score += 4;
	
	if($a4==a) $score += 1;
	if($a4==b) $score += 2;
	if($a4==c) $score += 3;
	if($a4==d) $score += 4;
	
	if($a5==a) $score += 1;
	if($a5==b) $score += 2;
	if($a5==c) $score += 3;
	if($a5==d) $score += 4;
	
	if($a6==a) $score += 1;
	if($a6==b) $score += 2;
	if($a6==c) $score += 3;
	if($a6==d) $score += 4;
	
	if($a7==a) $score += 1;
	if($a7==b) $score += 2;
	if($a7==c) $score += 3;
	if($a7==d) $score += 4;
	
	$typeMessage = "";
	if($score<12) $typeMessage = "You are a frog.";
	if(12<$score && $score<45) $typeMessage = "You are a donut.";
	if(45<$score && $score <75)$typeMessage = "You are always hungry.";
	if($score>75) $typeMessage = "You are off the scales.";
	
	If($a1==a) $r1 = $a1a;
	if($a1==b) $r1 = $a1b;
	if($a1==c) $r1 = $a1c;
	if($a1==d) $r1 = $a1d;
	
	if($a2==a) $r2 = $a2a;
	if($a2==b) $r2 = $a2b;
	if($a2==c) $r2 = $a2c;
	if($a2==d) $r2 = $a2d;
	
	if($a3==a) $r3 = $a3a;
	if($a3==b) $r3 = $a3b;
	if($a3==c) $r3 = $a3c;
	if($a3==d) $r3 = $a3d;
	
	if($a4==a) $r4 = $a4a;
	if($a4==b) $r4 = $a4b;
	if($a4==c) $r4 = $a4c;
	if($a4==d) $r4 = $a4d;
	
	if($a5==a) $r5 = $a5a;
	if($a5==b) $r5 = $a5b;
	if($a5==c) $r5 = $a5c;
	if($a5==d) $r5 = $a5d;
	
	if($a6==a) $r6 = $a6a;
	if($a6==b) $r6 = $a6b;
	if($a6==c) $r6 = $a6c;
	if($a6==d) $r6 = $a6d;
	
	if($a7==a) $r7 = $a7a;
	if($a7==b) $r7 = $a7b;
	if($a7==c) $r7 = $a7c;
	if($a7==d) $r7 = $a7d;

?>

<html>
	<head>
		<style type="text/css">
			.type{color:purple}
			.result 
			{
				color:green;
				font-size:larger;
			}
		</style>
	</head>
	<body>
		<h3 class="result">Personality Test Results</h3>
		<ol>
			<li><em><?php echo $q1; ?></em></li>
				<ul><li>You answered <?php echo $r1 . " because it is " . $r2 . '.'; ?></li>
				<li>Your answer to this question represents how you see yourself.</li>
			</ul><br />
		

			<li><em><?php echo $q3; ?></em></li>
				<ul><li>You answered <?php echo $r3 . " because they are " . $r4 . '.'; ?></li>
				<li>Your answer to this question represents how others see you.</li>
			</ul><br />
			
			<li><em><?php echo $q5; ?></em></li>
				<ul><li>You answered <?php echo $r5 . " because it is " . $r6 . '.'; ?></li>
				<li>Your answer to this question represents how you feel about sex.</li>
			</ul><br />
			
			<li><em><?php echo $q7; ?></em></li>
				<ul><li>You answered <?php echo $r7 . '.'; ?></li>
				<li>Your answer to this question represents how you feel about death.</li>
			</ul><br />
		</ol>
		<h3 class="result">Your Score is <?php echo $score; ?>.</h3>
		<h4 class="type"><?php echo $typeMessage; ?></h4>
		
	</body>
</html>