

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
        <th>dateTime</th>
		</tr>
        <?php
            require 'config.php';

            $statement="select * from order1 where Payment = 'Paid' order by Order_id asc";
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
					echo "<td>".$row['dateTime']."</td>";
					echo "<td><a href=\"deleteOnUpdate.php?id=$row[Order_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"edit.php?id=$row[Order_id]\">Edit</a> | <a href=\"singleview.php?id=$row[Order_id]\">View</a></td>";
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