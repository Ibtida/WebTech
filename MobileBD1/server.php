<?php

	
	$username="";
	$email="";
	$mobile="";
	$address="";
	$password="";
	$Cpassword="";

	//$usernameErr = $emailErr = $password1Err = $password2Err = $dateErr= $matchErr = "";

	
	$db=mysqli_connect('localhost','root','','mobilebd');

	if(isset($_POST['submitted']))
	{
		$username= $db->real_escape_string($_POST['username']);
		$email= $db->real_escape_string($_POST['email']);
		$mobile= $db->real_escape_string($_POST['mobile']);
		$address= $db->real_escape_string($_POST['address']);
		$password= $db->real_escape_string($_POST['password']);
		$Cpassword= $db->real_escape_string($_POST['Cpassword']);

		/*if(empty($username))
		{
			$usernameErr = "Username field is required";
		}

		if(empty($email))
		{
			$emailErr = "Email field is required";
		}

		if (empty($password1))
		{
			$password1Err="Password field is required";
		}
		if(empty($password2))
		{
			$password2Err="confirm password required";
		}
		if (empty($date))
		{
			$dateErr="Birth date is required";
		}

		if ($password1 != $password2)
		{
			$matchErr="password not matched!!!";
		}*/

		if(!empty($username) && !empty($email) && !empty($mobile) && !empty($address) && !empty($password) && !empty($Cpassword))
		{
			$password= $Cpassword;
			$sql = "INSERT INTO customer (UserName,Email,Phone,Address,Password,ConfirmPassword)
					VALUES ('$username','$email','$mobile','$address','password','Cpassword')";
			$result = mysqli_query($db,$sql);

			if($result!=null)
			{
				echo "<script>alert('Registration sucessful...');</script>";
				//(header("location: login.php"));			
			}else{
				$failedErr = "Error: " . $db->error;
			}
		}
	}

?>