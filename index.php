<?php
  require("controller/controller.php");
  
  $controller = new Controller();
  
  if (isset($_GET['gamename'])) {
  	$controller->viewGameDetail(); 
	} elseif (isset($_GET['cart'])) {
    $controller->viewCart(); 
  } else {
  	$controller->viewAll();  
  }
?>