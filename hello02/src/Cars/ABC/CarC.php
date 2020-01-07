<?php

namespace Cars\ABC;
use Cars\CarA;


class CarC extends CarA{

  ## ??
  protected $name;

  public function getName(){
    return $this->name;
  }
}
?>
