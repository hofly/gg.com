<?php 
	session_start();
	require("../controller/checkAdminLogin.php");
?>

<html>
<head>
	<title>Add game</title>
  <link rel="stylesheet" href="css/addGame.css">
  <link rel="stylesheet" href="css/background.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form action = "../controller/addGameController.php" method = "post">
		<div id = "inputBox">
			<h1>Game infomation</h1>
			<div class = "textBox">
				<input type="text" placeholder="Name" name="name" value="" required> 
			</div>
			<div class = "textBox">
				<input type="url" placeholder="Picture url" name="picture" value="" required> 
			</div>
			<div class = "textBox">
				<input type="text" placeholder="Producer" name="producer" value="" required> 
			</div>
			<div class = "textBox">
				<input type="number" step="0.01" min="0" placeholder="Price" name="price" value="" required> 
			</div>
			<div class = "textBox">
				<input type="text" placeholder="Description" name="description" value="" required>  
			</div>
			<div class = "textBox">
				<input type="number" step="1" min="0" placeholder="Quantity" name="quantity" value="" required> 
			</div>
			<input id="addButton" type="submit" name="add" value="Add"> 
		</div>
	</form>
</body>
</html>