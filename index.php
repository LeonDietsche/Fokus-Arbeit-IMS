<?php

  include 'includes/dbConfig.inc.php';
  include 'includes/cronStatus.inc.php';
  include 'includes/viewCron.inc.php';
  include 'includes/DatabaseWrapper.inc.php';

  $dbw = new DatabaseWrapper();
  $dbw->checkdb();
  $dbw->checktable();

if(isset($_POST['save']))
{
     $cronstatus= $_POST['cronstatus'];
     $classname = $_POST['classname'];
     $date = $_POST['date'];
     $content = $_POST['content'];
     $dbw->setCron($cronstatus, $classname, $date, $content);
 }

 if(isset($_POST['delete']))
 {
    $id = $_POST['cron_id'];
    $dbw->deleteCron($id);
 }



 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   <head>

     <meta charset="utf-8">
     <title> Crons </title>
   </head>
   <body>
     <h2>SDK</h2>
     <br></br>
     <div class="row">
       <form class="col s12"action="" method="post">
      <div class="row">
        <div class="input-field col s6">
          Status: <input type="text" name="cronstatus" placeholder="ok/error">
        </div>
        <div class="input-field col s6">
          Classname: <input type="text" name="classname" placeholder="classname">
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
       Date: <input type="text" class="datepicker" name="date" placeholder="2020-8-1 10:10:10"><br>
        </div>
        <div class="input-field col s6">
          Content: <input type="text" name="content" placeholder="content"><br>
        </div>
      </div>
       <input type="submit" name="save" value="submit">

      <br></br>

       </form>
     </div>

<h2>Administrationsansicht</h2>
<br></br>
<?php
$crons = new viewCron();
$crons->showLast100Crons();
 ?>
 <br></br>

<div class="row">
 <form class="col s12" method = "post">
     <div class="input-field col s12">
       Input the ID of the Cron you want to delete
      <input name="cron_id" type="text">
     </div>
     <input name="delete" type = "submit" value="delete">
</form>

</div>
   </body>
 </html>
