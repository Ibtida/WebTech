
<?php require 'sessionCheck.php';
      require 'header.php';
     ?>

   <?php require 'config.php'; ?>

 

<?php
  //$brand= "";
  
      $db=mysqli_connect('localhost','root','','mobilebd');
  
      $username=$_SESSION['username'];
      $sql2="SELECT * FROM customer Where Username='$username'";
      $result2= mysqli_query($db,$sql2);
      $row = $result2->fetch_assoc();

      //var_dump($row);
      $phone="";
      $address="";
      $userid="";


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
  
      $phone= $_REQUEST['phone'];
      $address= $_REQUEST['address'];
      $userid=$row['Customer_id'];

     // $sql4="INSERT INTO order1 (Customer_id,Customer_Name,Phone_no,Address)
         // VALUES ('$userid','$username','$phone','$address')";
     // $OrderCustomerInfo = mysqli_query($db,$sql4);

      $sql1 = "UPDATE order1 SET Payment='Paid',Customer_id='$userid',Customer_Name='$username', 
      Phone_no='$phone',Address='$address' WHERE Order_id=".$_GET['order_id'];
      $result1 = mysqli_query($db,$sql1);

      $updateStock= "UPDATE product1 SET Stock =".$_GET['newStock']." WHERE Product_id =".$_GET['Product_id'];
      $resultStock = mysqli_query($db,$updateStock);

      

            
      if($result1)
      {
        echo "<script>alert('Product ordered successfully');</script>";
        //header("location: index.php"); 
      }else{
        $failedErr = "Error: " . $db->error;
      }
  
   }



?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
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


<div class="container">
  <div id="Checkout" class="inline">
      
      <form method="POST"  class="form pay" id="formpay" enctype="multipart/form-data">
      <h1 align="center">Customer Details</h1>
      <div class="Name customer form-group">
              <label for="Customer Name" >Customer Name<h3><?=$row['Username']?></h3></label>
             
          </div>
          <div class="form-group">
              <label or="Phone">Phone No</label>
              <input id="Phone" class="form-control" name="phone" type="text" value="<?php echo $row['Phone_no']; ?>" maxlength="15"></input>
          </div>
          <div class="form-group">
              <label or="Address">Address</label>
              <input id="Address" class="form-control" name="address" type="text" value="<?php echo $row['Address']; ?>" maxlength="50"></input>
          </div>


      <h1 align="center">Pay Invoice</h1>
      <div class="card-row">
          <span class="visa"></span>
          <span class="mastercard"></span>
          <span class="amex"></span>
          <span class="discover"></span>
      </div>
          <div class="form-group">
              <label for="PaymentAmount">Payment amount</label>
              <div class="amount-placeholder">
                  <span>TK</span>
                  <span><?=$_GET['Price']*$_GET['quantity']?></span>
              </div>
          </div>
          <div class="form-group">
              <label or="NameOnCard">Name on card</label>
              <input id="NameOnCard" class="form-control" type="text" maxlength="255"></input>
          </div>
          <div class="form-group">
              <label for="CreditCardNumber">Card number</label>
              <input id="CreditCardNumber" class="null card-image form-control" type="text"></input>
          </div>
          <div class="expiry-date-group form-group">
              <label for="ExpiryDate">Expiry date</label>
              <input id="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" maxlength="7"></input>
          </div>
          <div class="security-code-group form-group">
              <label for="SecurityCode">Security code</label>
              <div class="input-container" >
                  <input id="SecurityCode" class="form-control" type="text" ></input>
                  <i id="cvc" class="fa fa-question-circle"></i>
              </div>
              <div class="cvc-preview-container two-card hide">
                  <div class="amex-cvc-preview"></div>
                  <div class="visa-mc-dis-cvc-preview"></div>
              </div>
          </div>
          <div class="zip-code-group form-group">
              <label for="ZIPCode">ZIP/Postal code</label>
              <div class="input-container">
                  <input id="ZIPCode" class="form-control" type="text" maxlength="10"></input>
                  <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Enter the ZIP/Postal code for your credit card billing address."><i class="fa fa-question-circle"></i></a>
              </div>
          </div>
          <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit">
              <span class="submit-button-lock"></span>
              <span class="align-middle">Pay <?=$_GET['Price']*$_GET['quantity']?></span>
          </button>
      </form>
  </div>
</div>
</body>
</html>