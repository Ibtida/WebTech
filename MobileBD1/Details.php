 <?php require 'config.php'; ?>

<?php 
	$sql="SELECT * FROM product1 WHERE Product_id=".$_GET['Product_id']; 
    $result = $conn->query($sql); 
	$row=$result->fetch_assoc();

	var_dump($row);
 ?>