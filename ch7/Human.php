<?php
  interface Bark{
    public function bark();
  }

  interface Swim{
    public function swim();
  }
  # include "Bark.php";
  # include "Swim.php";
  class Human implements Bark, Swim{
    ###### 實作介面 方法
    public function bark(){
      echo "人類叫聲...是在叫什麼啦！！";
    }
    public function swim(){
      echo "人類在游泳...不是在洗澡嗎？";
    }
  }
  ###
  # include "Human.php";
  $man = new Human();
  echo $man->bark();
  echo $man->swim();
?>