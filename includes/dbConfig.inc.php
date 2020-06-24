<?php

class dbConfig {

  private $dbServername;
  private $dbUsername;
  private $dbPassword;
  private $dbName;

  public function connect(){
  $this->dbServername = "localhost";
  $this->dbUsername = "root";
  $this->dbPassword = "";
  $this->dbName = "testdb";

  $conn = new mysqli($this->dbServername, $this->dbUsername, $this->dbPassword, $this->dbName);
  return $conn;


  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  }
}



 ?>
