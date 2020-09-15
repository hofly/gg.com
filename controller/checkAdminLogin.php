<?php 
  if (!isset($_SESSION['admin'])) {
    echo "<script>
      alert('You are not admin!');
      window.location.href='../view/adminLogin.php';
    </script>";
  }
?>