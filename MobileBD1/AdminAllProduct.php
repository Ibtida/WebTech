<?php
    require 'adminheader.php';
?>



<script>
    function showResult(str) {
        if (str.length==0) {
            document.getElementById("livesearch").innerHTML="";
            document.getElementsByClassName('puredata')[0].style.visibility = 'visible';
            document.getElementById("livesearch").style.border="0px";
            return;
        }
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
                document.getElementById("livesearch").innerHTML=this.responseText;
                document.getElementsByClassName('puredata')[0].style.visibility = 'hidden';
                // document.getElementById("livesearch").style.border="1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET","AdminProductSearch.php?q="+str,true);
        xmlhttp.send();
    }
</script>

 <div class="row">
        <div class="flipkart-navbar-search smallsearch col-md-12">
        <div class="row">
            <input class="flipkart-navbar-input col-md-8 col-md-offset-1" style="color: #000" type="" placeholder="Search for Products, Brands and more" name="" onkeyup="showResult(this.value)">
            <button class="flipkart-navbar-button col-xs-1">
                <svg width="15px" height="15px">
                    <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                </svg>
            </button>
        </div>
        </div>
    </div>
    <br>

<div id="livesearch"></div>

<div class="puredata">
        <div class="container">
        <div><h1 align="center">All Product</h1></div>
        <table style="color: white" class="table table-striped table-bordered table-condensed">
            <tr>
                <th>Image</th>
                <th>Product_id</th>
                <th>Brand</th>
                <th>Product_Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Details</th>
                <th></th>
            </tr>


<?php 
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
        ?>
		</table>
        
</div>
</div>
</body>
</html>