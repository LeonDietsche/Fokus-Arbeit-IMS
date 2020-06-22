<?php
  include 'includes/AbstractCronController.inc.php'
  include 'includes/cronStatus.inc.php'
  include 'includes/viewCron.inc.php'

 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
<?php
$cron = new viewCron();
$crons->showLast100Crons();

 ?>

   </body>
 </html>
