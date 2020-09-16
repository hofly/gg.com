<?php
	session_start();

  if (isset($_GET['clearcart'])) {
		session_destroy();
		unset($_SESSION['cart']);
		header('location:../index.php');
	}
?>