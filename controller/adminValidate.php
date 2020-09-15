<?php
  session_start();

  require("../model/database.php");
  require("test_input.php");
 
  class Validate extends Admin {
    public function validateInput() {
      $admins = $this->getAllAdmin();
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adminname = test_input($_POST["adminname"]); 
        $password = test_input($_POST["password"]); 
        
        if ($admins->num_rows > 0) {
          while ($admin = $admins->fetch_assoc()) {
            if(($admin['adminname'] == $adminname) && ($admin['password'] == $password)) { 
              $_SESSION['admin'] = $admin;
              header("Location:../view/adminPage.php"); 
            } 
            else { 
              echo "<script>
                alert('Invalid admin');
                window.location.href='../view/adminLogin.php';
              </script>";
            } 
          }
        }

      }
    }
  }

  $vali = new Validate();
  $vali->validateInput();
  
?>