<html>
<head>
	<title>Game detail</title>
  <link rel="stylesheet" href="view/css/gameDetail.css">
  <link rel="stylesheet" href="view/css/background.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php include 'slogan.html';?>
  <?php
    if ($game->num_rows > 0) {
      while ($gameInfo = $game->fetch_assoc()) {
        echo "
          <div id='grid-container'>
            <img src='{$gameInfo["Picture"]}' alt='Picture of {$gameInfo["Name"]}' 
              style='width:400px;height:350px;'>
            <div>
              <h2 id='gameName'>{$gameInfo["Name"]}</h2>
              <h3 id='gameProducer'>Producer: {$gameInfo["Producer"]}</h3>
              <h3 id='gameDescription'>{$gameInfo["Description"]}</h3>
              <h3 id='gamePrice'>Price: \${$gameInfo["Price"]}</h3>
              <h3 id='gameQuantity'>In stock: {$gameInfo["Quantity"]}</h3>
              <form action='/addToCart.php'>
                <input id='orderButton' type='submit' value='ORDER NOW'>
                <label id='inputQuantityLabel' for='quantity'>Your quantity:</label><br>
                <input id='inputQuantityBox' type='number' id='quantity' name='quantity' value=0>         
              </form> 
            </div>
          </div>
        ";
      }
    }
  ?>
</body>
</html>