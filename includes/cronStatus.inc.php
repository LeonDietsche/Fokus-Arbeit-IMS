<?php
class cronStatus extends dbConfig{

    protected function getAllCrons(){

    $sql = "Select * FROM cronjobsstatuslogs ORDER BY ID LIMIT 99";
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows;
    if ($numRows > 0) {

      while ($row = $result->fetch_assoc()) {
       $data[] = $row;
      }

      return $data;

    }

}

}
?>
