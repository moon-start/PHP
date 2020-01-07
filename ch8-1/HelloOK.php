<?php
trait Hello{
  ######## 覆蓋  
  function sayHello() {
    return "Hello";
  }
  ######## 新增
  function sayWorld() {
    return "Trait World";
  }


  ######## ### Hello World
  function sayHelloWorld() {
    echo $this->sayHello() . " " . $this->sayWorld();
  }
  ######## ### Hello Base World
  function sayBaseWorld() {
    echo $this->sayHello() . " " . parent::sayWorld();
  }
}

class Base{
  function sayWorld(){
    return "Base World";
  }
}
class HelloOK extends Base{
  use Hello;
  function sayWorld() {
    return "World";
  }
}
$h =  new HelloOK();

### Hello World
$h->sayHelloWorld(); // Hello World


### Hello Base World  ### 自己方法 呼叫 父親的方法
$h->sayBaseWorld();

?>