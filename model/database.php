<?php

class Database {
  protected $conn;

  function __construct() {
    $servername = "localhost";
    $username = "root";
    $password = "1";
    $dbname = "gameWeb";

    $this->conn = new mysqli($servername, $username, $password, $dbname);

    if ($this->conn->connect_error) {
      die ("Connection failed: " . $this->conn->connect_error);
    }
  }

  function __destruct() {
    $this->conn->close();
  }

  protected function getGameList() {
    $sql = "SELECT Name, Picture, Producer, Price FROM Games";
    $games = $this->conn->query($sql);
    return $games;
  }

  protected function getGameDetail($name) {
    $sql = "
      SELECT Name, Picture, Producer, Price, Description, Quantity 
      FROM Games 
      WHERE Name = '{$name}'";
    $game = $this->conn->query($sql);
    return $game;
  }
}

?>