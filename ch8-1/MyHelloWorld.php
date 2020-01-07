<?php
class Base {
  public function sayHello() {
    echo 'Hello ';
  }
}
trait SayWorld {
  public function sayHello() {
    ## 呼叫 父親的這個方法
    ## parent::sayHello();

    ## 改寫 成自己的子方法
    echo 'World!';
  }
}
class MyHelloWorld extends Base {
  use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
?>