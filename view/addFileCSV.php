<?php 
	session_start();
	require("../controller/checkAdminLogin.php");
?>

<html>
<head>
	<title>Add file csv</title>
  <link rel="stylesheet" href="css/addFileCSV.css">
  <link rel="stylesheet" href="css/background.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form action = "../controller/addFileCSVController.php" method = "post" enctype="multipart/form-data">
		<div id = "inputBox">
			<h1>Input .csv file</h1>
			<input id = "chooseFileText" type="file" name="fileCSV" required> 
			<input id="addButton" type="submit" name="add" value="Add"> 
		</div>
	</form>
</body>
</html>