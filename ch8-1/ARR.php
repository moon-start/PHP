<?php
trait Message {
  private $message;
      
  function alert() {
    $this->define();
    echo $this->message;
  }
  abstract function define();
}

class ARR {
  use Message;
  function define() {
    $this->message = "Custom Message";
  }
}

$messenger = new ARR;
$messenger->alert(); //Custom Message
?>