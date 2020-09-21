<?php
// session_start();

require("../model/database.php");
require("test_input.php");

function assoc_getcsv($csv_file) {
  $r = array_map('str_getcsv', file($csv_file));
  foreach( $r as $k => $d ) { $r[$k] = array_combine($r[0], $r[$k]); }
  return array_slice($r,1);
}  

class AddFileCSVController extends Game {
  public function execute() {

    if(isset($_FILES['fileCSV'])){
      $path = $_FILES['fileCSV']['name'];
      $file_ext = pathinfo($path, PATHINFO_EXTENSION);
      $extensions = "csv";

      if($file_ext !== $extensions){
        echo "<script>
          alert('Please choose a csv file!');
          window.location.href='../view/addFileCSV.php';
        </script>";
        die();
      }

      $tmpName = $_FILES['fileCSV']['tmp_name'];
      $dataArray = assoc_getcsv($tmpName);
      
      foreach($dataArray as $gameData) {
        if (empty($gameData["Name"])) {
          continue;
        } elseif (empty($gameData["Picture"])) {
          continue;
        } elseif (empty($gameData["Producer"])) {
          continue;
        } elseif (empty($gameData["Price"]) && $gameData["Price"]!=0) {
          continue;
        } elseif (empty($gameData["Description"])) {
          continue;
        } elseif (empty($gameData["Quantity"]) && $gameData["Quantity"]!=0) {
          continue;
        } elseif ($gameData["Price"] < 0) {
          continue;
        } elseif ($gameData["Quantity"] < 0) {
          continue;
        } elseif (filter_var($gameData["Price"], FILTER_VALIDATE_FLOAT) == FALSE) {
          continue;
        } elseif (filter_var($gameData["Quantity"], FILTER_VALIDATE_INT) === FALSE 
            && filter_var($gameData["Quantity"], FILTER_VALIDATE_INT) != 0) {
          continue;
        } elseif (filter_var($gameData["Picture"], FILTER_VALIDATE_URL) === FALSE) {
          continue;
        } else {

          $checkDone = $this->addGameAfterCheck($gameData["Name"], $gameData["Picture"], $gameData["Producer"], $gameData["Price"], $gameData["Description"], $gameData["Quantity"]);
          if ($checkDone === true) {
          } else {
            die("Error!");
          }
        }
      }

      echo "<script>
        alert('Game(s) in .csv added successfully!');
        window.location.href='../view/adminPage.php';
      </script>";

    }
  }
}

$add = new AddFileCSVController();
$add->execute();


?>