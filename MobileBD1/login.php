<?php
// session_start();



// if(time() - $_SESSION['timestamp'] > ) { //subtract new timestamp from the old one
//     echo"<script>alert('15 Minutes over!');</script>";
//     header("Location: logout.php"); //redirect to index.php
//     exit;
// } else {
//     $_SESSION['timestamp'] = time(); //set new timestamp
// }



if(isset($_POST["signin"]))
{  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $username=$_POST['username'];
  
    $password=md5($_POST['password']);  
  
    $con=mysqli_connect('localhost','root','','mobilebd'); 
    $sql="SELECT * FROM User WHERE Username='".$username."' AND Password='".$password."'"; 
    $result = $con->query($sql); 

    $row=$result->fetch_assoc();

      $dbusername=$row['Username'];  
      $dbpassword=$row['Password'];
      $dbUserType=$row['User_Type'];

      print_r($row);

      if($username == $dbusername && $password == $dbpassword && $dbUserType=='Customer')  
      {
        session_start();
        //echo "string1".$dbusername;
        $_SESSION['username']=$username;
        // setcookie ("username",$_SESSION['username'],time()+ 30);
        $_SESSION['loggedAt'] = time();
        $_SESSION['type']='Customer';

        if(!empty($_POST["remember"])) {
          setcookie ("un",$username,time()+ 60);
          setcookie ("pw",$_POST['password'],time()+ 60);
        } else {
          setcookie("un","");
          setcookie("pw","");
        }

        header("location: AllProductView.php");

      }  

      else if($username == $dbusername && $password == $dbpassword && $dbUserType=='Admin')  
      {
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['loggedAt'] = time();
        $_SESSION['type']='Admin';

        if(!empty($_POST["remember"])) {
          setcookie ("un",$username,time()+ 30);
          setcookie ("pw",$_POST['password'],time()+ 30);
          echo "Cookies Set Successfuly";
        } else {
          setcookie("un","");
          setcookie("pw","");
          echo "Cookies Not Set";
        }

        header("location: AdminAllProduct.php");  
      }
      } else {
        echo "Invalid username or password!";  
      }
}  
?>





  <script type="text/javascript">
      function validateForm() {
          var username = document.getElementById("loginusername").value;
          var password = document.getElementById("loginpassword").value;
          var status=true;
          
          if (username == "") {
                //alert("All Field must be filled out");
              document.getElementById("loginusername").style.borderColor = "red";
              status= false;
          }
          if (password == "") {
               // alert("All Field must be filled out");
              document.getElementById("loginpassword").style.borderColor="red";
              status= false;
               }
          
          if (!status) {
            window.alert("Please Fix the Error");
            return false;
          }
          if(status)
          {
            // window.alert("success");
            // document.getElementById("form").submit();
            return true;
          }
    </script>

<?php
  require 'header.php';
?>

<div class="grid puredata">
<div class="text-center pad10"><h1>Login</h1></div>

  <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit = "return validateForm()" name="form" class="form login">

    <div class="form__field">
      <label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Username</span></label>
      <input id="loginusername" type="text" name="username" class="form__input" placeholder="Username" style="border: 1px solid transparent" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["un"]; } ?>" >
      <p id="username_error"></p>
    </div>

    <div class="form__field">
      <label for="login__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Password</span></label>
      <input id="loginpassword" type="password" name="password" class="form__input" placeholder="Password" style="border: 1px solid transparent" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["pw"]; } ?>">
      <p id="password_error" class="hidden">Please Enter Password.</p>
    </div>

    <div class="field-field  col-md-offset-3">
    <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?> />
      <label for="remember-me"  style='background: transparent;'>Remember me</label>
    </div>

    <div class="form__field">
      <input type="submit" value="Login" align="right" id="login" class="btn btn-default" name="signin" style="background: ##333" > <input type="reset" value="Clear" class="btn btn-default">
    </div>

  </form>

  <p class="text--center">Not a member? <a href="signup.php">Sign up now</a> <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.svg#arrow-right"></use></svg></p>

</div>

<svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/></symbol></svg>
</body>
</html>


