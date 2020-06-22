<?php
class cronStatus extends AbstractCronController{

    protected function getAllCrons(){
    $sql = "Select * FROM cronjobsstatuslogs";
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows;
    if ($num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
       $data[] = $row;
      }
      return $data;
    }

}

 ?>
