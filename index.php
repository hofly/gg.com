<?php
	require_once("controller/controller.php");

  $controller = new Controller();
  
  if (!isset($_GET['gamename'])) {
    $controller->viewAll();
  } else {
    $controller->viewGameDetail();
  }
?>