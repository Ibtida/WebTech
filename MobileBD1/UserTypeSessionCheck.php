<?php 
	if (!isset($_SESSION)) {
	session_start();
	}
	if($_SESSION['type']!=='Admin')
	  {
	    header('location:404.php');
	  }
?>