
 <?php require 'server.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body  class="">

<?php 
  		require 'header.php';
  	 ?>

     <script type="text/javascript">
    function validateForm() {
        var username = document.getElementById("signup__username").value;
        var email = document.getElementById("signup__email").value;
        var mobile = document.getElementById("signup__mobile").value;
        var address = document.getElementById("signup__Address").value;
        var password = document.getElementById("signup__password").value;
        var cpassword = document.getElementById("signup__Cpassword").value;
        var status=true;
        
        if (username == "") {
              //alert("All Field must be filled out");
            document.getElementById("signup__username").style.borderColor = "red";
            status= false;
        }
        if (email == "") {
             // alert("All Field must be filled out");
            document.getElementById("signup__email").style.borderColor="red";
            status= false;
             }
        if (mobile == "") {
             // alert("All Field must be filled out");
            document.getElementById("signup__mobile").style.borderColor="red";
            status= false;
             }
        if (address == "") {
             // alert("All Field must be filled out");
            document.getElementById("signup__Address").style.borderColor="red";
            status= false;
             }
        if (password == "") {
             // alert("All Field must be filled out");
            document.getElementById("signup__password").style.borderColor="red";
            status= false;
             }
        if (cpassword == "") {
             // alert("All Field must be filled out");
            document.getElementById("signup__Cpassword").style.borderColor="red";
            status= false;
             }
        
        
        if (password ===cpassword) {
              
          if (!status) {
            window.alert("Please Fix the Error");
            return false;
          }
          if(status)
          {
             document.getElementById('form').submit();
             return true;
          }
       }
      else
      {
        alert("password not matched");
            document.getElementById("signup__password").style.borderColor="red";
            return false;
      }
    }
  </script>
<div class="grid">
<div class="text-center pad10"><h1>SignUp</h1></div>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit = "return validateForm()" method="POST" class="form login">

    <div class="form__field">
      <label for="signup__username"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="hidden">Username</span></label>
      <input id="signup__username" type="text" name="username" class="form__input" placeholder="Username" style="border: 1px solid transparent">
    </div>

    <div class="form__field">
      <label for="signup__email"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><span class="hidden">Email</span></label>
      <input id="signup__email" type="text" name="email" class="form__input" placeholder="Email" style="border: 1px solid transparent">
    </div>

    <div class="form__field">
      <label for="signup__mobile"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><span class="hidden">MobileNo</span></label>
      <input id="signup__mobile" type="text" name="mobile" class="form__input" placeholder="Mobile" style="border: 1px solid transparent">
    </div>


    <div class="form__field">
      <label for="signup__address"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><span class="hidden">Address</span></label>
      <input id="signup__Address" type="text" name="address" class="form__input" placeholder="Address" style="border: 1px solid transparent">
    </div>

    <div class="form__field">
      <label for="signup__password"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span><span class="hidden">Password</span></label>
      <input id="signup__password" type="password" name="password" class="form__input" placeholder="Password" style="border: 1px solid transparent">
    </div>

    <div class="form__field">
      <label for="signup__Cpassword"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span><span class="hidden">CPassword</span></label>
      <input id="signup__Cpassword" type="password" name="Cpassword" class="form__input" placeholder="Confirm Password" style="border: 1px solid transparent">
    </div>

    <div class="form__field">
      <input type="submit" name="submitted" value="Sign Up">
    </div>

  </form>

  <p class="text--center">Not a member? <a href="login.php">Login now</a> <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.svg#arrow-right"></use></svg></p>

</div>

<svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/></symbol></svg>
</body>
</html>