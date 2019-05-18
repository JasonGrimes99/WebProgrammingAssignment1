<HTML>
	<HEAD>
	<link rel="stylesheet" type="text/CSS" href="css/productview.css">
		<TITLE>
		View Product Details
		</TITLE>
		
		</HEAD>
	<BODY>
	<div class="header">
  <h1>Jason's Music Shop</h1>
  <p>Buy some music</p>
</div>
		<div>
			<?php
				include 'php/dblinkscript.php';
				$ID = $_GET['id']; //uses GET to grab the ID number that is the same as the number of iterations of the LOOP and passes id in the URL and then sets it to the variable $ID
				$queryview = "SELECT * FROM Product_tbl WHERE product_ID = $ID"; //selects the row where $ID= the product ID number in the database
				$selected = mysqli_query($link,$queryview);
				while ($row = mysqli_fetch_array($selected)){
		echo //prints the information for that specific item
			"
			<img src=Media/".$row["Picture"].">
			
			<p>Instrument name: ". $row["name"]."</p>
			<p>Price: £". $row["price"]."</p>
			<p>Quantity: ". $row["Quantity"]."</p>
			<p>Description: ". $row["Description"]."</p>
		";	
	}
	?>
	</div>
	<button onclick="goBack()">back</button>
	<script>
	function goBack(){ //back button 
		window.history.back();
	}
	</script>
	</BODY>
</HTML>