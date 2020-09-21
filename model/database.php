<?php
session_start();

class Database {

  protected $conn;

  function __construct() {
    $servername = "localhost";
    $username = "root";
    $password = "1";
    $dbname = "gameweb";

    $this->conn = new mysqli($servername, $username, $password, $dbname);

    if ($this->conn->connect_error) {
      die ("Connection failed: " . $this->conn->connect_error);
    }
  }

  function __destruct() {
    $this->conn->close();
  }
}

class GetData extends Database {
  protected function getGameList() {
    $sql = "SELECT Name, Picture, Producer, Price FROM games WHERE Quantity > 0";
    $games = $this->conn->query($sql);
    return $games;
  }

  protected function getGameDetail($name) {
    $sql = "
      SELECT Name, Picture, Producer, Price, Description, Quantity 
      FROM games 
      WHERE Name = '{$name}'";
    $game = $this->conn->query($sql);
    return $game;
  }
}

class Admin extends Database {
  protected function validateAdmin($adminNameInput, $passwordInput) {
    $sql = "SELECT * FROM adminlogin";
    $admins = $this->conn->query($sql);

    if ($admins->num_rows > 0) {
      while ($admin = $admins->fetch_assoc()) {
        if(($admin['adminname'] === $adminNameInput) && ($admin['password'] === $passwordInput)) { 
          $_SESSION['admin'] = $admin;
          return true;
        } 
        else { 
          return false;
        } 
      }
    }
  }
}

class Game extends Database {
  protected function getNames() {
    $sql = "SELECT Name FROM games";
    $names = $this->conn->query($sql);
    return $names;
  }

  protected function addGame($name, $picture, $producer, $price, $description, $quantity) {
    $sql = "INSERT INTO games (Name, Picture, Producer, Price, Description, Quantity)
      VALUES ('{$name}', '{$picture}', '{$producer}', {$price}, \"{$description}\", {$quantity})
    ";
    $this->conn->query($sql);
  }

  protected function updateGame($name, $newPicture, $newProducer, $newPrice, $newDescription, $newQuantity) {
    $sql = "
      UPDATE games 
      SET Picture = '{$newPicture}', Producer = '{$newProducer}', Price = {$newPrice}, Description = \"{$newDescription}\", Quantity = {$newQuantity} 
      WHERE Name = '{$name}'";
    $this->conn->query($sql);
  }

  protected function addGameAfterCheck($nameInput, $pictureInput, $producerInput, $priceInput, $descriptionInput, $quantityInput) {
    $names = $this->getNames();
    $gameExisted = false;

    while ($gameName = $names->fetch_assoc()) {
      if ($nameInput === $gameName["Name"]) {
        $gameExisted =true;
      }
    }

    if ($gameExisted === true) {
      $this->updateGame($nameInput, $pictureInput, $producerInput, $priceInput, $descriptionInput, $quantityInput);
    } else {
      $this->addGame($nameInput, $pictureInput, $producerInput, $priceInput, $descriptionInput, $quantityInput);
    }

    return true;
  }
}
?>