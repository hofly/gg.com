Development versions:
PHP 7.4.9
Nginx 1.18.0
MariaDB 10.5

Clone to your web server root directory (for example: /var/www/html/):
git clone https://github.com/hofly/gg.com.git

Create a new database (for example: gameweb)
Then import data_dump.sql to your database (for example: mariadb -u root -p gameweb < data_dump.sql)

Open /gg.com/model/database.php file and modify the information to suit your database:
For example:
	$servername = "localhost";
  $username = "root";
  $password = "1";
  $dbname = "gameweb";

Open browser and enter url (for example: "http://localhost/gg.com"):
To view game detail, click on the game container.
To add game to cart, fill in the quantity and click "ORDER NOW" button.
To view cart, click on the cart icon on the top right corner of the screen.
To clear cart, click on the "Clear cart" button below the table.
To move back to Home Page, click on the big line "GoodGame.com".

To log in as admin, enter your url with this tail: "/gg.com/admin"
Admin name: anhhnt
Password: 1

When you are an admin:
To add a game: click "Add a game" button => fill in information => click "Add" button. If the game name already existed, the game will be updated.
To add multiple games define in .csv file: click "Add file csv" button => browse .csv file (sample file: addGames.csv) => click "Add" button.
To logout, click "Logout" button.
