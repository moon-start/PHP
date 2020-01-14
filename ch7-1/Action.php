<?php
### 建立一個類別--來替代--抽象類別(呼叫兒子類別)
abstract class Animal {
  public function sleep(){
      echo '睡';
  }
}
class Dog extends Animal {
  public function move(){
      echo '跑';
  }
}
class Bird extends Animal{
  public function move()
  {
      echo '飛';
  }
}
#############################
class Action{
  public function toMove(Animal $obj)
  {
      $obj->move();
  }
}
#############################
$dog = new Dog();
$bird = new Bird();
############################
$action = new Action();
$action->toMove($dog);
$action->toMove($bird);
?>