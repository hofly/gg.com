<?php

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
  protected function getAllAdmin() {
    $sql = "SELECT * FROM adminlogin";
    $admins = $this->conn->query($sql);
    return $admins;
  }
}

class Game extends Database {
  protected function addGame($name, $picture, $producer, $price, $description, $quantity) {
    $sql = "INSERT INTO games (Name, Picture, Producer, Price, Description, Quantity)
      VALUES ('{$name}', '{$picture}', '{$producer}', {$price}, \"{$description}\", {$quantity})
    ";
    $this->conn->query($sql);
  }

  protected function getNames() {
    $sql = "SELECT Name FROM games";
    $names = $this->conn->query($sql);
    return $names;
  }


  protected function updateGame($name, $newPicture, $newProducer, $newPrice, $newDescription, $newQuantity) {
    $sql = "
      UPDATE games 
      SET Picture = '{$newPicture}', Producer = '{$newProducer}', Price = {$newPrice}, Description = \"{$newDescription}\", Quantity = {$newQuantity} 
      WHERE Name = '{$name}'";
    $this->conn->query($sql);
  }
}
?>