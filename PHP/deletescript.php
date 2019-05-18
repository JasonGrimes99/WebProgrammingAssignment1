<?php
include "dblinkscript.php";
$ID = $_GET["id"];//uses GET to grab the ID number that is the same as the number of iterations of the LOOP and passes id in the URL and then sets it to the variable $ID
$querydelete = "DELETE FROM Product_tbl WHERE product_ID = $ID"; //Deletes the row where $ID = product id 
if (mysqli_query($link, $querydelete)){
header("Location:../adminview.php");//at the end of the query it will return the user to adminview
}
?>