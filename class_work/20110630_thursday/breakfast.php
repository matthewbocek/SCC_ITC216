<?php
    /*
     * Create a varaible to represent the price of your breakfast.
     * Multiply it by .15 to figure out the tip
     * display the price
     * and the tip.
     */
	
	
	//declare variables
	$breakfastPrice = 18.34;
	$tipPct = .15;
	$tip = $breakfastPrice * $tipPct;
	$total = $breakfastPrice + $tip;
	
	//echo "My breakfast cost $" . $breakfastPrice . ".";
	//echo "The tip was $" . $tip . ".";
	//echo "The total came to $" . $total;
?>

<html>
	<body>
	
	<h3>Yay! Breakfast at Glo's is always awesome!</h3>
	Breakfast cost: $<?php echo $breakfastPrice; ?><br />
	Tip: $<?php echo number_format($tip, 2); ?><br />
	Total: $<?php echo number_format($total,2); ?><br />
	
	</body>
</html>