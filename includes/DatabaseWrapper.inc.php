<?php

  class DatabaseWrapper extends dbConfig{

    public function checktable(){
      $sql = "Select * From cronjobsstatuslogs";
      $result = $this->connect()->query($sql);
      if (!$result) {
        $createtable ="CREATE TABLE cronJobsStatusLogs(
	         id int(20) AUTO_INCREMENT PRIMARY KEY NOT NULL,
           cronstatus varchar(6) not null,
           classname varchar(128) not null,
           date datetime not null,
           content varchar(1000)
         );";
           $checktable = $this->connect()->query($createtable);
      }
    }


    public function setCron($cronstatus, $classname,$date, $content ){
     $sql = "INSERT INTO cronjobsstatuslogs (cronstatus,classname,date,content)
     VALUES ('$cronstatus','$classname','$date','$content')";
     $result = $this->connect()->query($sql);
     return $result;
    }

    public function deleteCron($id){
      $sqld = "DELETE FROM cronjobsstatuslogs WHERE id = $id";
      $result = $this->connect()->query($sqld);
      return $result;
    }
}
?>
