<?php
include 'dblinkscript.php';
if (isset($_POST['Addentry'])){
$name = mysqli_real_escape_string($link,$_POST['nameinput']); //receives the values inputted by the user VIA POST 
$price = mysqli_real_escape_string($link,$_POST['priceinput']);//the received values are saved as variables
$quantity = mysqli_real_escape_string($link,$_POST['quantityinput']);
$description = mysqli_real_escape_string($link,$_POST['descriptioninput']);
$picture = mysqli_real_escape_string($link,$_POST['pictureinput']);
$queryinsert = "INSERT INTO Product_tbl (name, price, Quantity, Description, Picture) VALUES ('$name','$price','$quantity','$description','$picture')";
if(mysqli_query($link,$queryinsert)){ //This query inserts the inputted data into the database under a new entry. 
	header("Location: ../adminview.php");
};

}
?>