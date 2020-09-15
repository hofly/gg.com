<?php
  require("model/database.php");

  class Controller extends GetData {
    public function viewAll() {
      $games = $this->getGameList();
      include 'view/gameList.php';
    }

    public function viewGameDetail() {
      $game = $this->getGameDetail($_GET['gamename']);
      include 'view/gameDetail.php';
    }
  }

?>