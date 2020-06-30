<?php

class viewCron extends cronStatus{

    public function showLast100Crons(){

      $datas = $this->getAllCrons();
      if ($datas != null) {
        foreach ($datas as $data) {

        echo "<table border = '1' style='width:100%'>";
        echo "<tr>";
        echo "<th width='5%'>"; echo $data['id']."</th>";

        if ($data['cronstatus'] == "error") {
            echo "<th width='15%' style='background-color:#FF0000'>"; echo $data['cronstatus']."</th>";
        }

        else if ($data['cronstatus'] == "ok") {
            echo "<th width='15%' style='background-color:#00FF00'>"; echo $data['cronstatus']."</th>";
        }
        echo "<th width='20%'>";echo $data['classname']."</th>";
        echo "<th width='30%'>";echo $data['date']."</th>";
        echo "<th width='30%'>";echo $data['content']."</th>";
        echo "</tr>";
        echo "</table>";

        }
      }

      else {
        echo "Noch keine Cronjobs wurden erstellt";
      }

}
}

 ?>
