<?php 
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
          $un = $_REQUEST['username'];
          $pa = $_REQUEST['password'];
          echo 'Username='.$un;
          echo "<br>";
          echo 'Password='.$pa;
  }

 ?>
