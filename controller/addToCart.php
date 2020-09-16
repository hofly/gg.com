<?php
  session_start();

  require("test_input.php");
 
  class addToCart {
    public function execute() {

      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = test_input($_POST["gameName"]); 
        $quantity = test_input($_POST["quantity"]); 
        $quantityInStock = test_input($_POST["quantityInStock"]); 
        $price = test_input($_POST["price"]); 

        if (!isset($_SESSION["cart"])) {

          if ($quantity > $quantityInStock) {
            echo "<script>
              alert('There is only {$quantityInStock} product(s) left');
              history.back();
            </script>";
            die();
          } 

          $orderLine = array("Name"=>$name, "Quantity"=>$quantity, "Price"=>$price);
          $_SESSION["cart"] = array();
          array_push($_SESSION["cart"], $orderLine);

        } else {

          $cart = $_SESSION["cart"];
          $checkDuplicate = false;
          foreach($cart as $key=>$line) {
            if ($name === $line["Name"]) {
              $checkDuplicate = true;
              $duplicateKey = $key;
              $sumQuantity = $line["Quantity"] + $quantity;
              if ($sumQuantity > $quantityInStock) {
                echo "<script>
                  alert('There is only {$quantityInStock} product(s) left');
                  history.back();
                </script>";
                die();
              } 
            }
          }

          if ($checkDuplicate === true) {
            $orderLine = array("Name"=>$name, "Quantity"=>$sumQuantity, "Price"=>$price);
            $_SESSION["cart"][$duplicateKey] = $orderLine;
          } else {
            $orderLine = array("Name"=>$name, "Quantity"=>$quantity, "Price"=>$price);
            array_push($_SESSION["cart"], $orderLine);
          }
          
        }

        echo "<script>
          alert('Successfully add to cart!');
          history.back();
        </script>";
      }
    }
  }

  $add = new addToCart();
  $add->execute();
  
?>