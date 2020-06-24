<?php

  class DatabaseWrapper extends dbConfig{

    public function setCron($cronstatus, $classname,$date, $content ){

     $sql = "INSERT INTO cronjobsstatuslogs (cronstatus,classname,date,content)
     VALUES ('$cronstatus','$classname','$date','$content')";

     $result = $this->connect()->query($sql);
     return $result;
    }
}
?>
