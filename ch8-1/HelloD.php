<?php
trait HelloA {
  public function sayHello() {
    echo 'Hello ';
  }
}
trait HelloB {
  public function sayWorld() {
    echo 'World';
  }
}

##### A和B 打包在一起
trait HelloC{
  #############
  use HelloA, HelloB;
}

class HelloD{
  ##########  
  use HelloC;
}
$world = new HelloD();
echo $world->sayHello() . " " . $world->sayWorld(); //Hello World
?>