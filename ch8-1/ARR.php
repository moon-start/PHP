<?php

##### trait 抽象類別
trait Message {
  private $message;
      
  function alert() {
    $this->define();
    echo $this->message;
  }

  ######## 抽象方法
  abstract function define();
}


class ARR {
  use Message;

  ######## 實作 抽象方法
  function define() {
    $this->message = "Custom Message";
  }
}


### Custom Message
$messenger = new ARR;
$messenger->alert(); //Custom Message
?>