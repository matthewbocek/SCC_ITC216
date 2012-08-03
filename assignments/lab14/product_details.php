<html>
	<head>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="hint.js"></script>
		
		<script type="text/javascript">
			$(function()//this crazy function syntax only applies to the open page function.
			{
				$("#product").keyup(getSuggestion);//keyup means as you lift your finger off the key
			});
			
			function getProductDetails()
			{
				var product = $("#product").val();
				$("#suggestion").load("includes/get_product_details.php",{product:product});
			}
			
			$(function()//function to call the show detail function
			{
				$("#submit").keyup(showDetail);//on click "show details", call the showDetail function
			});
			
			function showDetail()
			{
				var product = $("#product").val();
				$("#suggestion").load("includes/display_suggestion.php",{product:product});
			}
			
		</script>

	</head>
	<body>
		
		<h3><div id="suggestion"></div></h3>
		

	</body>
</html>