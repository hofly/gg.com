<?php
  session_start();
?>

<html>
<head>
  <title>Cart page</title>
  <link rel="stylesheet" href="view/css/cartPage.css">
  <link rel="stylesheet" href="view/css/background.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php include 'slogan.html';?>
  <div id = "container">

    <?php
      if (!isset($_SESSION["cart"])) {
        echo "<h1 class = 'title'>Your cart is empty!</h1>";
          
      } else {
        echo "<h1 class = 'title'>Your cart</h1>";
        echo "
          <table>
            <tr>
              <th>Game name</th>
              <th>Quantity</th>
              <th>Price</th>
            </tr>
        ";

        $cart = $_SESSION["cart"];
        $totalPrice = 0;
        foreach ($cart as $orderLine) {
          $gamePrice = $orderLine['Price']*$orderLine['Quantity'];
          $totalPrice = $totalPrice + $gamePrice;
          echo "
            <tr>
              <td>{$orderLine['Name']}</td>
              <td>{$orderLine['Quantity']}</td>
              <td>{$gamePrice}\$</td>
            </tr>
          ";
        }

        echo "
          <td colspan='2'>TOTAL PRICE</td>
          <td>{$totalPrice}\$</td>
        ";
        echo "</table>";
      }
    ?>
    <input id = "clearCartButton" type="button" value="Clear cart" class="button" 
      onClick="document.location.href='controller/clearCart.php?clearcart=1'" />
  </div>
</body>
</html>