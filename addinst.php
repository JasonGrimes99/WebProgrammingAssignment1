<HTML>
	<TITLE>
	Add Instrument
	</TITLE>
	<HEAD>
		<link rel="stylesheet" type="text/CSS" href="css/addinst.css">
	</HEAD>
	<BODY> 
	<div class="header">
	<h1>Jason's Music Shop</h1>
	<p>Buy some music</p>
	</div>
		<div id="addinst"> 
			<form method="POST" action="php/insertscript.php">
			<input type="text" name="nameinput"placeholder="Enter Instrument Name" required>
			<input type="text" name="priceinput"placeholder="Enter Price" required> 
			<input type="text" name="quantityinput" placeholder="Enter Quantity" required> 
			<input type="text" name="descriptioninput"placeholder="Enter Description" required> 
			<input type="text" name="pictureinput" placeholder="Enter filename of picture" required>
			<input type="submit" id="Addentry" name="Addentry" value="Add Entry">
			</form>
			<button onclick="location.href='adminview.php'">back</button>
		</div>
	</BODY>
</HTML>