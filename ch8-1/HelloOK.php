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
  
  function sayHelloWorld() {
    echo $this->sayHello() . " " . $this->sayWorld();
  }
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
$h =  new HelloWorld();
$h->sayHelloWorld(); // Hello World
?>