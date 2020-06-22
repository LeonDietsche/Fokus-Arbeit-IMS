<?php

abstract class AbstractCronController {

private $dbServername;
private $dbUsername;
private $dbPassword;
private $dbName;


protected function connect(){
$this->dbServername = "localhost";
$this->dbUsername = "root";
$this->dbPassword = "";
$this->dbName = "testdb"
$conn = new sqli($this->dbServername, $this->dbUsername, $this->dbPassword, $this->dbName);
return $conn;
echo "conn sucess";
}

abstract public function callCronJob();
abstract public function performCronJob();

}

 ?>
