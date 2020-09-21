<?php
session_start();

require("../model/session.php");
require("test_input.php");

function compareQuantity($quantity, $quantityInStock){
  if ($quantity > $quantityInStock) {
    echo "<script>
      alert('We have only {$quantityInStock} product(s) left');
      history.back();
    </script>";
    die();
  } 
}

class addToCartController extends cartSession{
  public function execute() {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $name = test_input($_POST["gameName"]); 
      $quantity = test_input($_POST["quantity"]); 
      $quantityInStock = test_input($_POST["quantityInStock"]); 
      $price = test_input($_POST["price"]); 

      $checkDone = $this->addToCart($name, $quantity, $quantityInStock, $price);

      if ($checkDone === true) {
        echo "<script>
          alert('Successfully add to cart!');
          history.back();
        </script>";
      } else {
        echo "<script>
          alert('{$checkDone}');
          history.back();
        </script>";
        die();
      }

      
    }
  }
}

$add = new addToCartController();
$add->execute();
  
?>