
<?php 
    require('config.php');

    ///write new query here
    $q=$_GET["q"];

    $result=mysqli_query($conn,"SELECT * FROM `product1` WHERE product_name like '$q%' or brand like '$q%'");

    $rows=mysqli_num_rows($result);
    if ($result->num_rows > 0)
        {

       echo '<div class="container">
       <table class="table table-striped table-bordered table-condensed">
            <tr>
                <th>Image</th>
                <th>Product_id</th>
                <th>Brand</th>
                <th>Product_Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Details</th>
                <th></th>
            </tr>';
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>"; 
                    echo "<td><img height='60px' width='60px' src='".$row['Image']."'></td>";
                    echo "<td>".$row['Product_id']."</td>";
                    echo "<td>".$row['Brand']."</td>";
                    echo "<td>".$row['Product_Name']."</td>";
                    echo "<td>".$row['Price']."</td>";
                    echo "<td>".$row['Stock']."</td>";
                    echo "<td>".$row['Details']."</td>";
                    echo "<td><a href=\"AdminDeleteProduct.php?Product_id=$row[Product_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"AdminEditProductShow.php?Product_id=$row[Product_id]\">Edit</a></td>";
                    echo "</tr>";
            }
            echo '</table></div>';
        
        }
        else
        {
            echo "Nothing found in db";
        }
 ?>