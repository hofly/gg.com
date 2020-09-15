<?php
  session_start();
  require("../controller/checkAdminLogin.php");
?>

<html>
<head>
	<title>Admin page</title>
  <link rel="stylesheet" href="css/adminPage.css">
  <link rel="stylesheet" href="css/background.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div id = "adminChooseMethodBox">
    <h1>Hello <?php echo $_SESSION['admin']['adminname']?></h1>
    <input type="button" value="Add a game" class="button" 
      onClick="document.location.href='../view/addGame.php'" />
    <input type="button" value="Add csv file" class="button" 
      onClick="document.location.href='../controller/adminLogout.php?logout=1'" />
    <input type="button" value="Logout" class="button" 
      onClick="document.location.href='../controller/adminLogout.php?logout=1'" />
  </div>
</body>
</html>