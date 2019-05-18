<?php
	include 'dblinkscript.php'; //includes the database connection script
if (isset($_POST['loginbutton'])){
	$username = mysqli_real_escape_string($link, $_POST['username']);//recives information inputted by user and defines the value as a variable to be compared against the database
	$password = mysqli_real_escape_string($link, $_POST['password']);
	
	$query1 = "SELECT * FROM Userinfo_tbl WHERE UserName = '$username' AND Password='$password'"; //query selects the row where the username and password entered matches the database
	$q1result = mysqli_query($link, $query1);
	$count = mysqli_num_rows($q1result);
	
	if ($count > 0) {//this checks if the user is an admin or not and redirects them to the correct page.
		$user = mysqli_fetch_array($q1result);
			if($user['Role'] === "Admin"){	//checks if the string in the "role" attribute = Admin			
				header("Location: ../adminview.php");
			} else {
				header("Location: ../userview.php");
			}
		} else {
			header("Location: ../login.php?error=1");
			
		}
}
	?>