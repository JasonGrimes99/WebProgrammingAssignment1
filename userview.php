<HTML>
	<HEAD>
		<TITLE>
			Music Store Admin view
		</TITLE>
		<link rel="stylesheet" type="text/CSS" href="css/userview.css"
	</HEAD>
	<BODY> 
	<div class="header">
  <h1>Jason's Music Shop</h1>
  <p>Buy some music</p>
</div>
		<div id ="Userview">
			<table>
				<th>Instrument</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Image</th>
				<th>View</th>
		<?php
	
		include 'php/dblinkscript.php';
		$queryall = "SELECT * FROM Product_tbl"; //selects all instrument data in the database
		$allproducts = mysqli_query($link,$queryall);
		$count = mysqli_num_rows($allproducts);
		$i = 0;
		while($row = mysqli_fetch_array($allproducts)){
		
			echo //prints the instrument information into a HTML table
				//the below href passes a value in the url that is the same as $i so that it can be compared to the databases product id
				"<span>
					<tr>
					<td>". $row["name"]."</td>
					<td>£". $row["price"]."</td>
					<td>". $row["Quantity"]."</td>
					<td>". "<img src=Media/".$row["Picture"]."></td>
					<td>". "<a href='Viewinst.php?id=". $row ["product_ID"]."' name='ViewButton[$i]'>View</a></td>
					</tr>	
					</span>";
					$i++;
}
	?>
			</table>
		<span>
			<form method="get" action="login.php">
				<input type="submit" id="log_out" name="Logoutbutton" value="Logout">
			</form>
		</span>
	</div>
	</BODY>
</HTML>