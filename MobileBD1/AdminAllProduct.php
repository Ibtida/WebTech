

		<?php
        SESSION_START();
        if(isset($_SESSION['username']))
        {


            require 'adminheader.php';

        echo '<div class="container">
        <div><h1 align="center">All Product</h1></div>
        <table class="table table-striped table-bordered table-condensed">
            <tr>
                <th>Image</th>
                <th>Product_id</th>
                <th>Brand</th>
                <th>Product_Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Details</th>
            </tr>';



            require 'config.php';

            $statement="select * from product1 order by Product_id desc";
            $result = $conn->query($statement);

            if ($result->num_rows > 0)
            {
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
            
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
        }

        else
        {
            header("location: login.php"); 
        }
            
        ?>
		</table>
        }
</div>
</body>
</html>