<?php

##### 如果沒有方法 自己產生 方法
class Shape {
  const PI = 3.142 ;

  ################## call      產生 #### 物件的方法
  # name 是方法名稱,
  # arg 則是陣列名稱
  function __call($name,$arg){
    if($name == 'area')

        ###### count 計算$crg 陣列長度
        switch(count($arg)){
            case 0 : return 0 ;
            //self 指物件自己
            case 1 : return self::PI * $arg[0] ;
            case 2 : return $arg[0] * $arg[1];
        }
  }

  
  ################# callStatic 產生 #### 類別的方法
  function __callStatic($name,$arg){
    return array(3,5);
  }
}
$circle = new Shape();
echo $circle->area(3);  ## 產生:this.方法

$rect = new Shape();
echo $rect->area(8,6);  ## 產生:this方法

echo Shape::hello()[1];  ## [產生] ##parent::方法
?>

<!-- ."<br>"; -->