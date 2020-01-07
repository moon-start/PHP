<?php
trait HelloA {
  public function sayHello() {
    echo 'HelloA ';
  }
}
trait HelloB {
  public function sayWorld() {
    echo 'HelloB';
  }
}
class HelloC {
  use HelloA, HelloB;
  public function sayExclamationMark() {
    echo '!';
  }
}


## 輸出 : HelloA HelloB!
$o = new HelloC();
$o->sayHello();
$o->sayWorld();
$o->sayExclamationMark();
?>