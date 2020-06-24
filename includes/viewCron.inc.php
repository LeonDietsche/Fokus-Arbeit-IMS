<?php

class viewCron extends cronStatus{

    public function showLast100Crons(){

      $datas = $this->getAllCrons();
      foreach ($datas as $data) {

      echo "<table border = '1' style='width:100%'>";
      echo "<tr>";
      echo "<th width='5%'>"; echo $data['id']."</th>";
      echo "<th width='15%'>"; echo $data['cronstatus']."</th>";
      echo "<th width='20%'>";echo $data['classname']."</th>";
      echo "<th width='30%'>";echo $data['date']."</th>";
      echo "<th width='30%'>";echo $data['content']."</th>";
      echo "</tr>";
      echo "</table>";

      }
}
}

 ?>
