<?php
  // session_start();

require("../model/database.php");
require("test_input.php");

class AddGameController extends Game {
  public function execute() {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $nameInput = test_input($_POST["name"]); 
      $pictureInput = test_input($_POST["picture"]); 
      $producerInput = test_input($_POST["producer"]); 
      $priceInput = test_input($_POST["price"]); 
      $descriptionInput = test_input($_POST["description"]); 
      $quantityInput = test_input($_POST["quantity"]); 

      $checkDone = $this->addGameAfterCheck($nameInput, $pictureInput, $producerInput, $priceInput, $descriptionInput, $quantityInput);

      if ($checkDone === true) {
        echo "<script>
          alert('Game added successfully!');
          window.location.href='../view/adminPage.php';
        </script>";
      } else {
        die("Error!");
      }
    }
  }
}

$add = new AddGameController();
$add->execute();
  
  
?>