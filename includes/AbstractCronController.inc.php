<?php

abstract class AbstractCronController {

  protected function callCronJob();
  abstract protected function performCronJob();
}

 ?>
