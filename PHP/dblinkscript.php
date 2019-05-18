<?php
$host = "127.0.0.1";
$username = "s5069580";
$password = "k4kfRENMyxsFonkVxg4oVwfwd3jecwTr";
$dbname = "s5069580";
$link = mysqli_connect($host, $username, $password, $dbname); //connecting to the database and defined as variable $link

if (mysqli_connect_error($link)){
	echo "failure to reach database";
	die('fail to connect');
}
?>