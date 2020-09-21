<?php
session_start();

require("../model/database.php");
require("test_input.php");

class Validate extends Admin {
  public function validateInput() {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $adminNameInput = test_input($_POST["adminname"]); 
      $passwordInput = test_input($_POST["password"]); 

      $check = $this->validateAdmin($adminNameInput, $passwordInput);
      
      if ($check === true) {
        header("Location:../view/adminPage.php"); 
      } else { 
        echo "<script>
          alert('Invalid admin');
          window.location.href='../view/adminLogin.php';
        </script>";
        die();       
      }

    }
  }
}

$vali = new Validate();
$vali->validateInput();
  
?>