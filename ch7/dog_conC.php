<?php
  include  "dog_conB.php";
  $mydog = new dog_conB("peter","棕色","牧羊犬",10);
  echo $mydog->name."<br />";
  echo $mydog->color."<br />";
  echo $mydog->style."<br />";
  echo $mydog->doWork()."<br />";
  # //子類別未改寫父類別的方法
  echo $mydog->dogRun()."<br />";
?>