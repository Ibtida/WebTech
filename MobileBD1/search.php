


<?php 
    require('config.php');

    ///write new query here
    $q=$_GET["q"];

    $result=mysqli_query($conn,"SELECT * FROM `product1` WHERE Product_Name like  '$q%' ");

    $rows=mysqli_num_rows($result);
    if ($rows> 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<div class='item col-xs-4 col-lg-4'>
                            <div class='thumbnail card'>
                                <div class='img-event' style='border:3px solid #6f6868'>
                                    <img class='group aaa list-group-image img-fluid' src=".$row['Image']." alt='' />
                                </div>
                                <div class='caption card-body'>
                                    <h4 class='group card-title inner list-group-item-heading'>
                                       ".$row['Product_Name']." </h4>
                                    <p class='group inner list-group-item-text'>
                                        ".$row['Details']."</p>
                                    <div class='row'>
                                        <div class='col-xs-12 col-md-6'>
                                           ".$row['Price']." <p class='lead'>
                                                </p>
                                        </div>
                                        <div class='col-xs-12 col-md-6'>
                                            <a class='btn btn-success' href=buyDetails.php?Product_id=".$row['Product_id'].">Buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
        }

    }
    else
    {
        echo "No Item found according to this search term";
    }
 ?>