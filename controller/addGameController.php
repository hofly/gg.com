<?php
  session_start();

  require("../model/database.php");
  require("test_input.php");
 
  class AddGameController extends Game {
    public function execute() {

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // if (empty($_POST["name"])) {
        //   echo "<script>
        //     alert('Name is required');
        //     window.location.href='../view/addGame.php';
        //   </script>";
        // } elseif (empty($_POST["picture"])) {
        //   echo "<script>
        //     alert('picture is required');
        //     window.location.href='../view/addGame.php';
        //   </script>";
        // } elseif (empty($_POST["producer"])) {
        //   echo "<script>
        //     alert('Producer is required');
        //     window.location.href='../view/addGame.php';
        //   </script>";
        // } elseif (empty($_POST["price"])) {
        //   echo "<script>
        //     alert('Price is required');
        //     window.location.href='../view/addGame.php';
        //   </script>";
        // } elseif (empty($_POST["description"])) {
        //   echo "<script>
        //     alert('Description is required');
        //     window.location.href='../view/addGame.php';
        //   </script>";
        // } elseif (empty($_POST["quantity"])) {
        //   echo "<script>
        //     alert('Quantity is required');
        //     window.location.href='../view/addGame.php';
        //   </script>";
        // }

        $name = test_input($_POST["name"]); 
        $picture = test_input($_POST["picture"]); 
        $producer = test_input($_POST["producer"]); 
        $price = test_input($_POST["price"]); 
        $description = test_input($_POST["description"]); 
        $quantity = test_input($_POST["quantity"]); 
        
        $this->addGame($name, $picture, $producer, $price, $description, $quantity);

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