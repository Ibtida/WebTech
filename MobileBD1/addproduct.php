<?php
		  require 'adminheader.php';
		?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/my.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<h2 ALIGN="CENTER">ADD PRODUCT</h2>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form login">

			  <div class="form__field">
			    <label for="signup__username"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="hidden">Username</span></label>
			    <input id="signup__username" type="text" name="username" class="form__input" placeholder="Username" required>
			  </div>

			  <div class="form__field">
			    <label for="signup__email"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><span class="hidden">Email</span></label>
			    <input id="signup__email" type="text" name="email" class="form__input" placeholder="Email" required>
			  </div>

			  <div class="form__field">
			  	<label for="signup__Brand"><span class="glyphicon glyphicon-phone"></span><span class="hidden">Brand</span></label>
			  	<select id="signup__Image" name="brand" class="form__input" required style="background-color: var(--loginInputBackgroundColor);border:none;">
			  	    <option value="volvo">Volvo</option>
			  	    <option value="saab">Saab</option>
			  	    <option value="fiat">Fiat</option>
			  	    <option value="audi">Audi</option>
			  	  </select>
			  </div>

			  <div class="form__field">
			    <label for="signup__mobile"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><span class="hidden">MobileNo</span></label>
			    <input id="signup__mobile" type="text" name="mobile" class="form__input" placeholder="Mobile" required>
			  </div>


			  <div class="form__field">
			    <label for="signup__address"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><span class="hidden">Address</span></label>
			    <input id="signup__Address" type="text" name="address" class="form__input" placeholder="Address" required>
			  </div>

			  <div class="form__field">
			    <label for="signup__password"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span><span class="hidden">Password</span></label>
			    <input id="signup__password" type="password" name="password" class="form__input" placeholder="Password" required>
			  </div>

			  <div class="form__field">
			    <label for="signup__Cpassword"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span><span class="hidden">CPassword</span></label>
			    <input id="signup__Cpassword" type="password" name="Cpassword" class="form__input" placeholder="Confirm Password" required>
			  </div>

			  <div class="form__field">
			    <label for="signup__Image"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span><span class="hidden">Image</span></label>
			    <input id="signup__Image" type="file" name="file" class="form__input" placeholder="Mobile Image" required>
			  </div>

			  <div class="form__field">
			    <input type="submit" name="submitted" value="Sign Up">
			  </div>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</html>
