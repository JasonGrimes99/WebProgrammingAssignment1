<HTML>
	<TITLE>
	Add Instrument
	</TITLE>
	<HEAD>
		<link rel="stylesheet" type="text/CSS" href="css/Editinst.css">
	</HEAD>
	<BODY> 
		<div class="header">
  <h1>Jason's Music Shop</h1>
  <p>Buy some music</p>
</div>
		<div id="Editinst">	
		<form method= "POST" action="php/Editscript.php">
	<?php
	require 'php/dblinkscript.php';
	$ID = $_GET["id"]; //uses GET to grab the ID number that is the same as the number of iterations of the LOOP and passes id in the URL and then sets it to the variable $ID
	$querycurrent = "SELECT * FROM Product_tbl WHERE product_ID = $ID";  //selects the row where $ID= the product ID number in the database
	$currentproducts = mysqli_query($link,$querycurrent);
	while ($row = mysqli_fetch_array($currentproducts)){ //the below code is HTML printing the current information in the database into the relevant input fields
		
	?>
		<input type= "hidden" name= "IDup" value="<?php echo $row["product_ID"];?>" required>
		<input type= "text" name= "Nameup" placeholder="Update Instrument Name" value="<?php echo $row["name"];?>" required>
		<input type= "text" name= "Priceup" placeholder="Update Price" value="<?php echo $row["price"];?>" required>
		<input type= "text" name= "Quantityup" placeholder="Update Quantity" value="<?php echo $row["Quantity"];?>" required> 
		<input type= "text" name= "Descriptionup" placeholder="Update Description" value="<?php echo $row["Description"];?>" required>
		<input type= "text" name= "Pictureup" placeholder="Update filename of picture" value="<?php echo $row["Picture"];?>" required>
		<input type= "submit" id="Update" name="Update" value="Update">
		<button onclick="location.href='adminview.php'">back</button>
		<?php
		}
		?>
			</form>
		</div>
		
	</BODY>
	
</HTML>