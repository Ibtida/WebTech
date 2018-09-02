<?php      		
  require 'adminheader.php';
?>
                  <div class="container">
        		<div><h1 align="center">All Order</h1></div>
        	<table class="table table-striped table-bordered table-condensed">
        		<tr>
                <th>Order_id</th>
                <th>Brand</th>
                <th>Product_Name</th>
                <th>Price</th>
                <th>Color</th>
                <th>Storage</th>
                <th>Quantity</th>
                <th>Customer_id</th>
                <th>Customer_Name</th>
                <th>Address</th>
                <th>Phone_no</th>
                <th>dateTime</th>
                <th>delivery status</th>
                <th></th>
        		</tr>
                
                    <?php require 'config.php';

                    $statement="select * from order1 where Payment = 'Paid' order by delivery asc, Order_id desc";
                    $result = $conn->query($statement);

                    if ($result->num_rows > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>"; 
        					echo "<td>".$row['Order_id']."</td>";
        					echo "<td>".$row['Brand']."</td>";
        					echo "<td>".$row['Product_Name']."</td>";
        					echo "<td>".$row['Price']."</td>";
        					echo "<td>".$row['Color']."</td>";
        					echo "<td>".$row['Storage']."</td>";
        					echo "<td>".$row['Quantity']."</td>";
                            echo "<td>".$row['Customer_id']."</td>";
                            echo "<td>".$row['Customer_Name']."</td>";
                            echo "<td>".$row['Address']."</td>";
                            echo "<td>".$row['Phone_no']."</td>";
                            echo "<td>".$row['dateTime']."</td>";
                            echo "<td>".$row['delivery']."</td>";
                            if($row['delivery']=='no')
        					 echo "<td><a href=\"DeliveryConfirm.php?Order_id=$row[Order_id]\">Delivery</a></td>";
                            else
                                echo "<td>Delivared</td>";
        					// echo "<td><a href=\"deleteOnUpdate.php?id=$row[Order_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"edit.php?id=$row[Order_id]\">Edit</a> | <a href=\"singleview.php?id=$row[Order_id]\">View</a></td>";

        					echo "</tr>";
                        }
        			
                    }
                    else
                    {
                        echo "Nothing found in db";
                    }
                    mysqli_close($conn);
                ?>

            </table>
                    </div>
                </body>
                </html>