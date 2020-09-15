<html>
<head>
	<title>Game detail</title>
  <link rel="stylesheet" href="css/adminLogin.css">
  <link rel="stylesheet" href="css/background.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form action = "../controller/adminValidate.php" method = "post">
		<div id = "adminLoginBox">
			<h1>Admin Login</h1>
			<div class = "textBox">
				<input type="text" placeholder="Admin name" name="adminname" value=""> 
			</div>
			<div class = "textBox">
				<input type="password" placeholder="Password" name="password" value=""> 
			</div>
			<input id="logInButton" type="submit" name="login" value="Login"> 
		</div>
	</form>
</body>
</html>