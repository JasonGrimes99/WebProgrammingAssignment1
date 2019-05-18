<?php
include 'dblinkscript.php';
include 'Editinst.php';
if (isset($_POST['Update']))
$ID = mysqli_real_escape_string($link,$_POST['IDup']); //recieves the values inputted by the user VIA POST 
$name = mysqli_real_escape_string($link,$_POST['Nameup']);//and then saved these values as variables  
$price = mysqli_real_escape_string($link,$_POST['Priceup']);
$quantity = mysqli_real_escape_string($link,$_POST['Quantityup']);
$description = mysqli_real_escape_string($link,$_POST['Descriptionup']);
$picture = mysqli_real_escape_string($link,$_POST['Pictureup']);
$QueryUpdate = "UPDATE Product_tbl SET name='$name', price='$price',Quantity='$quantity',Description='$description',Picture='$picture' WHERE product_ID='$ID' ";
//the query will take the variables and update the data
if(mysqli_query($link,$QueryUpdate)){ //This query updates the current information in the database with the inputted data into the database where $ID= the product ID
	header("Location: ../adminview.php");
}
?>