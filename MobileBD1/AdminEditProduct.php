<?php

require 'config.php';
$Brand=$_POST['Brand'];
$ProductName=$_POST['ProductName'];
$Price=$_POST['Price'];
$Stock=$_POST['Stock'];
$Details=$_POST['Details'];
$Image=$_POST['imagefile'];

$id = $_GET['Product_id'];
$referenceId = 0;


$result = mysqli_query($conn,"UPDATE product1 SET Brand='$Brand',Product_Name='$ProductName',Price='$Price',Stock='$Stock',Image='$Image' where Product_id='$id'");
    //close_db();
//redirecting to the display page (listdata.php in our case)
    header("Location:AdminAllProduct.php");

?>