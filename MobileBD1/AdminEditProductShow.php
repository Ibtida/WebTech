<?php
  require 'adminheader.php';
?>

<?php
    require 'config.php';

    $id = $_GET['Product_id'];

    $statement="select * from product1 where Product_id='$id'";
    $result = mysqli_query($conn, $statement);
    
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

<h2 class="text-center">EDIT PRODUCT</h2>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="Post" onsubmit = "validateForm()" class="form login" id="form" action="AdminEditProduct.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
            <?php if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    ?>
			<div class="form__field">
			  	<label for="addproduct__Brand">Brand</label>
			  	<input id="addproduct__Brand" type="text" name="Brand" class="form__input" value="<?php echo $row['Brand']; ?>" placeholder="a" style="border: 1px solid transparent">


			  </div>

			  <div class="form__field">
			    <label for="addproduct__ProductName">PrName</label>
			    <input id="addproduct__ProductName" type="text" name="ProductName" class="form__input" value="<?php echo $row['Product_Name']; ?>" placeholder="a" style="border: 1px solid transparent">
			  </div>



			  <div class="form__field">
			    <label for="addproduct__Price">Price</label>
			    <input id="addproduct__Price" type="text" name="Price" class="form__input" value="<?php echo $row['Price']; ?>"style="border: 1px solid transparent">
			  </div>

			  

			  <div class="form__field">
			    <label for="addproduct__Stock">Stock</label>
			    <input id="addproduct__Stock" type="text" name="Stock" class="form__input" value="<?php echo $row['Stock']; ?>" style="border: 1px solid transparent">
			  </div>


			  <div class="form__field">
			    <label for="addproduct__Details">Details</label>
			    <input id="addproduct__Details" type="text" name="Details" class="form__input" value="<?php echo $row['Details']; ?>" style="border: 1px solid transparent">
			  </div>

			  

			  <div class="form__field">
			    <label for="addproduct__Image">Image</label>
			    <input id="addproduct__Image" type="file" name="imagefile" class="form__input" value="<?php echo $row['Image']; ?>" style="border: 1px solid transparent">
			  </div>
              <?php
                }
            }
        ?>
			  <div class="form__field">
			    <input type="submit" name="Added" value="Add">

			  </div>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
	</body>
</html>
