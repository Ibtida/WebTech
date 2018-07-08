<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
	<?php
		/*if(!empty(($_SESSION['country'])))
		{
			echo $_SESSION['country'];
		}

		if(isset($_SESSION))
		{
			if(!empty($_SESSION['p']))
			{
				echo "session started";
				echo $_SESSION['p'];
			}
			print_r($_SESSION);*/
			echo "Favorite color is " . $_SESSION["applicant"] . ".<br>";

		
	?>
</body>
</html>