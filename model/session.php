<?php
session_start();
class cartSession {
	protected function compareQuantity($quantity, $quantityInStock){
	  if ($quantity > $quantityInStock) {
	  	return false;
	  } 
	}

	protected function addToCart($name, $quantity, $quantityInStock, $price) {
		if (!isset($_SESSION["cart"])) {

	    $checkStock = $this->compareQuantity($quantity, $quantityInStock);
	    if ($checkStock === false) {
	    	return "We have only {$quantityInStock} product(s) left";
	    }

	    $orderLine = array("Name"=>$name, "Quantity"=>$quantity, "Price"=>$price);
	    $_SESSION["cart"] = array();
	    array_push($_SESSION["cart"], $orderLine);
	    return true;

	  } else {

	    $cart = $_SESSION["cart"];
	    $checkDuplicate = false;
	    foreach($cart as $key=>$line) {
	      if ($name === $line["Name"]) {
	        $checkDuplicate = true;
	        $duplicateKey = $key;
	        $sumQuantity = $line["Quantity"] + $quantity;
	        $checkStock = $this->compareQuantity($sumQuantity, $quantityInStock);
			    if ($checkStock === false) {
			    	return "We have only {$quantityInStock} product(s) left";
			    }
	      }
	    }

	    if ($checkDuplicate === true) {
	      $orderLine = array("Name"=>$name, "Quantity"=>$sumQuantity, "Price"=>$price);
	      $_SESSION["cart"][$duplicateKey] = $orderLine;
	      return true;
	    } else {
	      $checkStock = $this->compareQuantity($quantity, $quantityInStock);
		    if ($checkStock === false) {
		    	return "We have only {$quantityInStock} product(s) left";
		    }
	      $orderLine = array("Name"=>$name, "Quantity"=>$quantity, "Price"=>$price);
	      array_push($_SESSION["cart"], $orderLine);
	      return true;
	    }
	    
	  }
	}

}
?>