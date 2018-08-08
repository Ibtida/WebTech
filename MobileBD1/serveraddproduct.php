<?php

	
	$brand="";
	$ProductName="";
	$Price="";
	$Stock="";
	$Details="";
	$imagefile="";

	//$usernameErr = $emailErr = $password1Err = $password2Err = $dateErr= $matchErr = "";

	
	$db=mysqli_connect('localhost','root','','mobilebd');


	if(isset($_POST['Added']))
	{
		$brand= $db->real_escape_string($_POST['brand']);
		$ProductName= $db->real_escape_string($_POST['ProductName']);
		$Price= $db->real_escape_string($_POST['Price']);
		$Stock= $db->real_escape_string($_POST['Stock']);
		$Details= $db->real_escape_string($_POST['Details']);
		$imagefile= $db->real_escape_string($_POST['imagefile']);



		if(!empty($brand) && !empty($ProductName) && !empty($Price) && !empty($Stock) && !empty($Details) && !empty($imagefile))
		{
			//$password= $Cpassword;
			//$password= md5($password);
			echo "<script>alert('New Product added');</script>";


			$sql = "INSERT INTO product1 (Brand,Product_Name,Price,Stock,Details,Image)
					VALUES ('$brand','$ProductName','$Price,'$Stock','$Details','$imagefile')";

			$result = mysqli_query($db,$sql);

			
			if($result!=null)
			{
				echo "<script>alert('New Product added');</script>";
				header("location: AdminHome.php");			
			}else{
				$failedErr = "Error: " . $db->error;
			}

			
		}
	}

?>