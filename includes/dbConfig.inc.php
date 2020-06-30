<?php

class dbConfig {

  private $dbServername;
  private $dbUsername;
  private $dbPassword;
  private $dbName;

  public function checkdb(){
    $conn = new mysqli("localhost", "root",'');
    $dbname = "dbfacron";
    if (empty (mysqli_fetch_array(mysqli_query($conn,"SHOW DATABASES LIKE '$dbname'"))))
    {
    $sql = "create database dbfacron;";
    $conn->query($sql);
    }
  }

  public function connect(){
  $this->dbServername = "localhost";
  $this->dbUsername = "root";
  $this->dbPassword = "";
  $this->dbName = "dbfacron";

  $conn = new mysqli($this->dbServername, $this->dbUsername, $this->dbPassword, $this->dbName);
  return $conn;

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  }


}

 ?>
