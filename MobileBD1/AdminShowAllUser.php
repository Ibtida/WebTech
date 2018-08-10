<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/my.js"></script>
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
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

            $statement="select * from Customer where User_Type='Customer'";
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