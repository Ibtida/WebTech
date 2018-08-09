

   <?php require 'config.php'; ?>

<?php 
	$sql="SELECT * FROM product1 WHERE Product_id=".$_GET['Product_id']; 
    $result = $conn->query($sql); 
	$row=$result->fetch_assoc();

	//var_dump($row);
 ?>


 <?php
	$brand= "";
	$ProductName= "";
	$Price= "";
	$color="";
	$storage="";
	$quantity="";

	//$usernameErr = $emailErr = $password1Err = $password2Err = $dateErr= $matchErr = "";
	$db=mysqli_connect('localhost','root','','mobilebd');
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$brand= $row['Brand'];
		$ProductName= $row['Product_Name'];
		$Price= $row['Price'];
		$color= $_REQUEST['color'];
		$storage= $_REQUEST['storage'];
		$quantity= $_REQUEST['quantity'];
		$stock=$row['Stock'];

		//echo "$color--$storage";
		/*if($quantity >= $stock)
		{
			echo "<script>alert('quantity is much than stock');</script>";
			header("location: index.php");
		}*/

		if(!empty($color) && !empty($storage) && !empty($quantity))
		{
			//$password= $Cpassword;
			//$password= md5($password);d

			// INSERT INTO `product1`(`Product_id`, `Brand`, `Product_Name`, `Price`, `Stock`, `Details`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
			$sql1 = "INSERT INTO order1 (Brand,Product_Name,Price,Color,Storage,Quantity)
					VALUES ('$brand','$ProductName','$Price','$color','$storage','$quantity')";

			$result1 = mysqli_query($db,$sql1);

			
			if($result1)
			{
				echo "<script>alert('Product ordered successfully');</script>";
				//header("location: index.php");		
			}else{
				$failedErr = "Error: " . $db->error;
			}

			
		}
		else
		{
			//echo "UnSuccessfull";
		}
	}	

?>





<!DOCTYPE html>
<html>
	<head>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>

    <body>
       <form method="Post" class="form buy" id="formbuy" enctype="multipart/form-data">
        <div class="container">

        	<div class="row">
               			<div class="col-xs-4 item-photo">
               
		                 <img style="max-width:100%;" src="<?php echo $row['Image']; ?>" />
		                </div>
		                <div class="col-xs-5" style="border:0px solid gray">
		                    <!-- Datos del vendedor y titulo del producto -->
		                    <h3 name="productname"><?php echo $row['Product_Name']; ?></h3>    
		                    <h5 name="brand" style="color:#337ab7"><a href="#"><?php echo $row['Brand']; ?></a> ·</h5> 
		                    <h5><small style="color:#337ab7"><?php echo $row['Stock']; ?>--in stock</small></h5>
		        
		                    <!-- Precios -->
		                    <h6 class="title-price"><small>MobileBD</small></h6>
		                    <h3 name="price" style="margin-top:0px;"><?php echo $row['Price']; ?></h3>
		        
		                    <!-- Detalles especificos del producto -->
		                    <div class="section">
		                        <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>                    
		                        <div>
		                            <div >
		                            	<select name="color">
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
		                            	<select name="storage">
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
		                            <input name="quantity" value="1" />
		                            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
		                        </div>
		                    </div>                
		        
		                    <div class="section" style="padding-bottom:20px;">
		                        
		                        <input type="submit" name="Buy" value="Buy Now">
		                     </div>

		                     <div class="section" style="padding-bottom:20px;">
		                        <h6><a href="https://www.<?php echo $row['Product_Name']; ?>.com"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> For more specification</a></h6>
		                    </div>                                        
		                </div>                              
        			
                		
	            </div>
	        </div> 
        </form>       
    </body>
</html>




