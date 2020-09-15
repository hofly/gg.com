<?php 
  session_start();

  if (!isset($_SESSION['admin'])) {
    echo "<script>
      alert('You are not admin!');
      window.location.href='../view/adminLogin.php';
    </script>";
  }
?>

<html>
<head>
	<title>Game detail</title>
  <link rel="stylesheet" href="css/adminPage.css">
  <link rel="stylesheet" href="css/background.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div id = "adminChooseMethodBox">
    <h1>Hello <?php echo $_SESSION['admin']['adminname']?></h1>
    <a class="button" href="Political/Thread/thread_insert.php">Add a game</a>
    <a class="button" href="Political/Thread/thread_insert.php">Add csv file</a>
    <a class="button" href="../controller/adminLogout.php?logout='1'">Logout</a>
  </div>
</body>
</html>