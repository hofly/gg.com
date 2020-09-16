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
              <th>Company</th>
              <th>Contact</th>
              <th>Country</th>
            </tr>
        ";

        echo "
          <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
          </tr>
          <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
          </tr>
          <tr>
            <td>Ernst Handel</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
          </tr>
          <tr>
            <td>Island Trading</td>
            <td>Helen Bennett</td>
            <td>UK</td>
          </tr>
          <tr>
            <td>Laughing Bacchus Winecellars</td>
            <td>Yoshi Tannamuri</td>
            <td>Canada</td>
          </tr>
          <tr>
            <td>Magazzini Alimentari Riuniti</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
          </tr>
        ";

        echo "</table>";
      }
    ?>

  </div>
</body>
</html>