<?php
  include 'includes/AbstractCronController.inc.php';
  include 'includes/dbConfig.inc.php';
  include 'includes/cronStatus.inc.php';
  include 'includes/viewCron.inc.php';
  include 'includes/DatabaseWrapper.inc.php';
  $dbw = new DatabaseWrapper();

  if(isset($_POST['save']))
  {
     $cronstatus= $_POST['cronstatus'];
     $classname = $_POST['classname'];
     $date = $_POST['date'];
     $content = $_POST['content'];
     $dbw->setCron($cronstatus, $classname, $date, $content);
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
     <form action="" method="post">
     Status: <input type="text" name="cronstatus" placeholder="ok/error"><br>
     Classname: <input type="text" name="classname"><br>
     Date: <input type="text" class="datepicker" name="date"><br>
     Content: <input type="text" name="content"><br>
     <input type="submit" name="save" value="submit">
     </form>

<br></br>
<?php
$crons = new viewCron();
$crons->showLast100Crons();
 ?>

   </body>
 </html>
