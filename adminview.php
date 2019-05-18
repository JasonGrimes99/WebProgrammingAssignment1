<HTML>
	<HEAD>
		<TITLE>
			Music Store Admin view
		</TITLE>
		<link rel="stylesheet" type="text/CSS" href="css/adminview.css"> 
	</HEAD>
	<BODY> 
	<div class="header">
		<h1>Jason's Music Shop</h1>
		<p>Buy some music</p>
	</div>
		<div id ="AdminView">
			<table>
				<th>Instrument</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Image</th>
				<th>View Instrument</th>
				<th>Edit Entry</th>
				<th>Delete Entry</th>
	<?php
	
		include 'php/dblinkscript.php';
		$queryall = "SELECT * FROM Product_tbl"; //selects all instrument data in the database
		$allproducts = mysqli_query($link,$queryall);
		$count = mysqli_num_rows($allproducts);
		$i = 0;
		while($row = mysqli_fetch_array($allproducts)){
		
			echo //prints the instrument information into a HTML table
				"<span>
					<tr>
					<td>". $row["name"]."</td>
					<td>£". $row["price"]."</td>
					<td>". $row["Quantity"]."</td>
					<td>". "<img src=Media/".$row["Picture"]."></td>
					<td>". "<a href='Viewinst.php?id=". $row ["product_ID"]."' name='ViewButton[$i]'>View</a></td>
					<td>". "<a href='Editinst.php?id=". $row ["product_ID"]."' name='editButton[$i]'>Edit</a></td>
					<td>". "<a href='php/deletescript.php?id=". $row["product_ID"]."' name='DeleteButton[$i]'>Delete</a></td>
					</tr>	
					</span>";
			$i++; //viewinst editinst and deletescript href all pass a value that is the same as $i so that it can be compared to the databases product id in the relevant scripts
}
	?>
			</table>
		<span>
			
			<form method="get" action="login.php">
				<input type="submit" id="log_out" name="Logoutbutton" value="Logout"> 
			</form>
			<form method="get" action="addinst.php">
				<input type="submit" id="Addinstform" name="Addinstform" value="Add Instrument Form">
			</form>
		</span>
	</div>
	</BODY>
</HTML>