<?php include("php/scriptlogin.php"); ?>
<HTML>
	<HEAD>
		<TITLE>
		Login Page
		</TITLE>
	<link rel="stylesheet" type="text/CSS" href="css/loginform.css"> 	
	</HEAD>
	<BODY>
		<div class="header"> 
			<h1>Jason's Music Shop</h1>
			<p>Buy some music</p>
		</div>
		<div id="loginform"> 
		<form method="POST" action="php/scriptlogin.php">
		<p> Username </p>
		<input type="text" placeholder="Enter User Name" name="username" required >
		<P> Password </p>
		<input type="password" placeholder="Enter Password" name="password" required >
		<input type="submit" id="loginbutton" name="loginbutton" value="Login">
	</form>
	<?php
		if(isset($_GET['error'])==true){ //Receives if an incorrect attempt at logging in has been made as it passes the "error" in the URL
			echo "Incorrect username or password.";	
}
?>
</div>
</BODY>
</HTML>