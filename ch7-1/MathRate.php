<?php
class MathRate{
  public static function ComplexRate($principal,$yearRate,$period,$years){
     $result = 0;
     $result =  $principal * pow((1 + ((float)$yearRate/$period)),($period*$years));
     return $result;
  } 
}

// include "MathRate.php";
echo MathRate::ComplexRate(1000,0.18,12,3);
?>