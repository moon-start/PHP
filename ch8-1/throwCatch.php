<?php
class A extends Exception {};
class B extends Exception {};

function process($denominator) {
  try    {
    if ($denominator == 0) {
      throw new A();
    
    }else if ($denominator < 0) {
      throw new B();
    
    }else {
      echo 25 / $denominator;
    }

   ##### 多層次的例外處理
  }catch (A $ex)    {
    echo "DIVIDE BY ZERO EXCEPTION!";

  }catch (B $ex)    {
    echo "DIVIDE BY NEGATIVE NUMBER EXCEPTION!";
  
  }catch (Exception $x) {
    echo "UNKNOWN EXCEPTION!";
  }
}

########## DIVIDE BY ZERO EXCEPTION!
########## DIVIDE BY ZERO EXCEPTION!
process(0);
?>