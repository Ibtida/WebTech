<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/my.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap.css"> -->
</head>
  <body>
  	<?php 
  		require 'header.php';
  	 ?>


<!--sql-->
<?php
require 'config.php';

$sql = "SELECT * FROM product1 order by Product_id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
    { ?>

<div class="container">
    <div id="products" class="row view-group">

            <?php
                // output data of each row
                while($row = $result->fetch_assoc()) 
                {
                    // echo "<br> id: ". $row["Product_id"]. " -- Name: ". $row["Product_Name"]. "--Price " . $row["Price"] ." -- Details: ". $row["Details"]." -- image: ". $row["Image"]. "<br>";

                    // $dbimage=$row['Image'];  
                    // $dbproductname=$row["Product_Name"];

            ?>

<!-- Product Grid View -->



                
                        <div class="item col-xs-4 col-lg-4">
                            <div class="thumbnail card">
                                <div class="img-event" style="border:3px solid #6f6868">
                                    <img class="group list-group-image img-fluid" src=<?=$row['Image']?> alt="" />
                                </div>
                                <div class="caption card-body">
                                    <h4 class="group card-title inner list-group-item-heading">
                                        <?php echo $row['Product_Name']; ?></h4>
                                    <p class="group inner list-group-item-text">
                                        <?php echo $row['Details']; ?></p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p class="lead">
                                                <?php echo $row['Price']; ?></p>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <a class="btn btn-success" href=<?="buyDetails.php?Product_id=".$row['Product_id']?>>Buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                }
                    } 
                    else
                     {
                        echo "0 results";
                    }

                    $conn->close();
                    ?> 
        </div>


<br />

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/my.js"></script>

  </body>
</html>