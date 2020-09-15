<html>
<head>
	<title>Game list</title>
  <link rel="stylesheet" href="view/css/gameList.css">
  <link rel="stylesheet" href="view/css/background.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php include 'slogan.html';?>
  <div class="grid-container">
    <?php
      if ($games->num_rows > 0) {
        while ($game = $games->fetch_assoc()) {
          echo "
            <a href='index.php?gamename={$game["Name"]}' style='text-decoration:none;'>
              <div>
                <img src='{$game["Picture"]}' alt='Picture of {$game["Name"]}' 
                  style='width:220px;height:180px;'>
                <h2 class='gameName'>{$game["Name"]}</h2>
                <h3 class='gameProducer'>Producer: {$game["Producer"]}</h3>
                <h3 class='gamePrice'>Price: \${$game["Price"]}</h3>
              </div>
            </a>      
          ";
        }
      }
    ?>
  </div>
</body>
</html>