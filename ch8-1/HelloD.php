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

#### 輸出 : /usr/share/nginx/html/PHP/ch8-1
echo __DIR__ ."<BR>";
#### 輸出 : Hello World
echo $world->sayHello() . " " . $world->sayWorld(); //Hello World
?>