<?php 
require 'UserTypeSessionCheck.php';
require 'sessionCheck.php';
require 'config.php';
 
$Order_id=$_REQUEST['Order_id'];


$result = mysqli_query($conn,"UPDATE order1 SET delivery='yes' where Order_id='$Order_id'");
    //close_db();
//redirecting to the display page (listdata.php in our case)
    header("Location:AdminAllOrder.php");
 ?>

