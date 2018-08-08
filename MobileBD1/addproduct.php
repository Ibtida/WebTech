


<!-- Add Product -->


<?php
	$brand="";
	$ProductName="";
	$Price="";
	$Stock="";
	$Details="";
	$imagefile="";

	//$usernameErr = $emailErr = $password1Err = $password2Err = $dateErr= $matchErr = "";
	$db=mysqli_connect('localhost','root','','mobilebd');


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$brand= $_REQUEST['brand'];
		$ProductName= $_REQUEST['ProductName'];
		$Price= $_REQUEST['Price'];
		$Stock= $_REQUEST['Stock'];
		$Details= $_REQUEST['Details'];

		if(!empty($brand) && !empty($ProductName) && !empty($Price) && !empty($Stock) && !empty($Details) && !empty($_FILES['imagefile']))
		{
			$path_info = pathinfo($_FILES['imagefile']['name']);
			$extention =$path_info['extension']; // "bill"
			$fileName=$brand.$ProductName.'.'.$extention;
			$fileName= str_replace (" ", "-", $fileName);
			
			$path="productimage/";
			$path = $path.basename($fileName);
			move_uploaded_file($_FILES['imagefile']['tmp_name'], $path);
			//$password= $Cpassword;
			//$password= md5($password);d

			// INSERT INTO `product1`(`Product_id`, `Brand`, `Product_Name`, `Price`, `Stock`, `Details`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
			$sql = "INSERT INTO product1 (Brand,Product_Name,Price,Stock,Details,Image)
					VALUES ('$brand','$ProductName',$Price,$Stock,'$Details','".$path."')";

			$result = mysqli_query($db,$sql);
			
			if($result)
			{
				echo "<script>alert('New Product added');</script>";
				header("location: AdminHome.php");		
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


<?php
  require 'adminheader.php';
?>

<script type="text/javascript">
    function validateForm() {
        var brand = document.getElementById("signup__Brand").value;
        var ProductName = document.getElementById("addproduct__ProductName").value;
        var Price = document.getElementById("addproduct__Price").value;
        var Stock = document.getElementById("addproduct__Stock").value;
        var Details = document.getElementById("addproduct__Details").value;
        var imagefile = document.getElementById("addproduct__Image").value;
        var status=true;
        
        if (brand == "") {
              //alert("All Field must be filled out");
            document.getElementById("signup__Brand").style.borderColor = "red";
            status= false;
        }
        if (ProductName == "") {
             // alert("All Field must be filled out");
            document.getElementById("addproduct__ProductName").style.borderColor="red";
            status= false;
             }
        if (Price == "") {
             // alert("All Field must be filled out");
            document.getElementById("addproduct__Price").style.borderColor="red";
            status= false;
             }
        if (Stock == "") {
             // alert("All Field must be filled out");
            document.getElementById("addproduct__Stock").style.borderColor="red";
            status= false;
             }
        if (Details == "") {
             // alert("All Field must be filled out");
            document.getElementById("addproduct__Details").style.borderColor="red";
            status= false;
             }
        if (imagefile == "") {
             // alert("All Field must be filled out");
            document.getElementById("addproduct__Image").style.borderColor="red";
            status= false;
             }
        
        if (!status) {
          window.alert("Please Fix the Error")
        }
        if(status)
        {
           document.getElementById('form').submit();
        }
    }
  </script>

<h2 class="text-center">ADD PRODUCT</h2>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="Post" onsubmit = "validateForm()" class="form login" id="form" enctype="multipart/form-data">

			<div class="form__field">
			  	<label for="signup__Brand"><span class="glyphicon glyphicon-phone"></span><span class="hidden">Brand</span></label>
			  	<select id="signup__Brand" name="brand" class="form__input" style="background-color: var(--loginInputBackgroundColor);border:none;">
			  	    <option value="Apple">APPLE</option>
			  	    <option value="Oneplus">ONEPLUS</option>
			  	    <option value="Samsung">SAMSUNG</option>
			  	    <option value="Huawei">HUAWEI</option>
			  	    <option value="Xiaomi">XIAOMI</option>

			  	  </select>
			  </div>

			  <div class="form__field">
			    <label for="addproduct__ProductName"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="hidden">ProductName</span></label>
			    <input id="addproduct__ProductName" type="text" name="ProductName" class="form__input" placeholder="Product Name" style="border: 1px solid transparent">
			  </div>



			  <div class="form__field">
			    <label for="addproduct__Price"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><span class="hidden">Price</span></label>
			    <input id="addproduct__Price" type="text" name="Price" class="form__input" placeholder="Price" style="border: 1px solid transparent">
			  </div>

			  

			  <div class="form__field">
			    <label for="addproduct__Stock"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><span class="hidden">Stock</span></label>
			    <input id="addproduct__Stock" type="text" name="Stock" class="form__input" placeholder="Stock" style="border: 1px solid transparent">
			  </div>


			  <div class="form__field">
			    <label for="addproduct__Details"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><span class="hidden">Details</span></label>
			    <input id="addproduct__Details" type="text" name="Details" class="form__input" placeholder="Product Details" style="border: 1px solid transparent">
			  </div>

			  

			  <div class="form__field">
			    <label for="addproduct__Image"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span><span class="hidden">Image</span></label>
			    <input id="addproduct__Image" type="file" name="imagefile" class="form__input" placeholder="Mobile Image" style="border: 1px solid transparent">
			  </div>

			  <div class="form__field">
			    <input type="submit" name="Added" value="Add">

			  </div>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
	</body>
</html>





