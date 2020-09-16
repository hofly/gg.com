<?php
  // session_start();

  require("../model/database.php");
  require("test_input.php");
 
  class AddGameController extends Game {
    public function execute() {

      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = test_input($_POST["name"]); 
        $picture = test_input($_POST["picture"]); 
        $producer = test_input($_POST["producer"]); 
        $price = test_input($_POST["price"]); 
        $description = test_input($_POST["description"]); 
        $quantity = test_input($_POST["quantity"]); 

        $names = $this->getNames();
        $gameExisted = false;

        while ($gameName = $names->fetch_assoc()) {
          if ($name === $gameName["Name"]) {
            $gameExisted =true;
          }
        }

        if ($gameExisted === true) {
          $this->updateGame($name, $picture, $producer, $price, $description, $quantity);
        } else {
          $this->addGame($name, $picture, $producer, $price, $description, $quantity);
        }

      }
    }
  }

  $add = new AddGameController();
  $add->execute();
  echo "<script>
    alert('Game added successfully!');
    window.location.href='../view/adminPage.php';
  </script>";
  
?>