<?php 
	if (!isset($_SESSION)) {
	session_start();
	}

	if(!isset($_SESSION['username']))
	{
		header('location:login.php');
	}
	else
	{
		if((time()-$_SESSION['loggedAt'])>60*60)		
		{
			header('location:logout.php');
		}
		else
		{
			$_SESSION['loggedAt']=time();
		}
	}
 ?>