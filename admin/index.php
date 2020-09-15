<?php
	session_start();

  if (!isset($_SESSION['admin'])) {
  	header('location:../view/adminLogin.php');
  } else {
  	header('location:../view/adminPage.php');
  }
  
?>