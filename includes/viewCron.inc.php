<?php
class cronStatus extends AbstractCronController{

    protected function showLast100Crons(){
      $datas = $this->getAllCrons();

      foreach ($datas as $data) {
      echo $data['id'] ."<br>";
      echo $data['cronstatus'] ."<br>";
      echo $data['classname'] ."<br>";
      echo $data['date'] ."<br>";
      echo $data['content'] ."<br>";

      }
}


 ?>
