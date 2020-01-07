<?php
namespace Cars;

class CarA{

  ## ??
  protected $name;

  public function setName($name){
    $this->name = $name;
    return "我是第二個類別...";
  }

  public function getName(){
    return $this->name;
  }
}
?>
