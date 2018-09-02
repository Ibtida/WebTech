
<?php 
    require('config.php');

    ///write new query here
    $q=$_GET["q"];

    $result=mysqli_query($conn,"SELECT * FROM `user` WHERE username like '$q%' and User_Type='Customer'");

    $rows=mysqli_num_rows($result);
    if ($result->num_rows > 0)
        {

       echo '<div class="container">
       <table class="table table-striped table-bordered table-condensed">
        <tr>
        <th>Customer_id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone_no</th>
        <th>Address</th>
        <th></th>
        </tr>';
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
            echo '</table></div>';
        
        }
        else
        {
            echo "Nothing found in db";
        }
 ?>