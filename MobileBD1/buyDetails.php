

   <?php require 'config.php'; ?>

<?php 
	$sql="SELECT * FROM product1 WHERE Product_id=".$_GET['Product_id']; 
    $result = $conn->query($sql); 
	$row=$result->fetch_assoc();

	//var_dump($row);
 ?>

<!DOCTYPE html>
<html>
	<head>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>

    <body>

        <div class="container">
        	<div class="row">
               <div class="col-xs-4 item-photo">
                    <img style="max-width:100%;" src="<?php echo $row['Image']; ?>" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3><?php echo $row['Product_Name']; ?></h3>    
                    <h5 style="color:#337ab7"><a href="#"><?php echo $row['Brand']; ?></a> · <small style="color:#337ab7"><?php echo $row['Stock']; ?>--in stock</small></h5>
        
                    <!-- Precios -->
                    <h6 class="title-price"><small>MobileBD</small></h6>
                    <h3 style="margin-top:0px;"><?php echo $row['Price']; ?></h3>
        
                    <!-- Detalles especificos del producto -->
                    <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>                    
                        <div>
                            <div >
                            	<select name="cars">
							    <option value="Black">Black</option>
							    <option value="White">White</option>
						
							  </select>
                            </div>
                            
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>Storage</small></h6>                    
                        <div>
                            <div >
                            	<select name="cars">
							    <option value="64 Gb">64 Gb</option>
							    <option value="128 Gb">128 Gb</option>
							  </select>
                            </div>
                        </div>
                    </div>   
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>QUANTITY</small></h6>                    
                        <div>
                            <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                            <input value="1" />
                            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                        </div>
                    </div>                
        
                    <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Buy Now</button>
                        <h6><a href="https://www.<?php echo $row['Product_Name']; ?>.com"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> For more specification</a></h6>
                    </div>                                        
                </div>                              
        
                		
            </div>
        </div>        
    </body>
</html>
