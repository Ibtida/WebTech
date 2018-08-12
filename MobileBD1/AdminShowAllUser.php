<?php          		
  require 'adminheader.php';         		
?>
            		<div class="container">
            		<div><h1 align="center">All User</h1></div>
            	<table class="table table-striped table-bordered table-condensed">
            		<tr>
            		<th>Customer_id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone_no</th>
                    <th>Address</th>
            		</tr>
<?php                    
    require 'config.php';

    $statement="select * from User where User_Type='Customer'";
    $result = $conn->query($statement);

    if ($result->num_rows > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>"; 
			echo "<td>".$row['Customer_id']."</td>";
			echo "<td>".$row['Username']."</td>";
			echo "<td>".$row['Email']."</td>";
			echo "<td>".$row['Phone_no']."</td>";
			echo "<td>".$row['Address']."</td>";
			echo "<td><a href=\"AdminDeleteUser.php?Customer_id=$row[Customer_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
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