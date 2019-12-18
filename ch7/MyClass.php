<?php
    class MyClass {
      public $x = 123;
      protected $y = "Spring";  # 影響繼承 
      private $z = 'hello';

      public function getPara(){
        echo "inclass->x : ".$this->x."<br />";
        echo "inclass->y : ".$this->y."<br />";
        echo "inclass->z : ".$this->z."<br />";
      }
    }
     class SS extends MyClass {
    #  // 定義子類別需要的屬性
    #  protected $age;
        # public function __construct($name,$color,$style,$age){
      #  // 繼承父類別的屬性
      #  parent::__construct($name,$color,$style);
      #  $this->name = $name;
         


        # }

            function __construct(){
                  # echo $this->z."子類別";
                  echo $this->y."子類別<br>";  # 影響繼承 

            }
     }

    $test = new MyClass();
    $test->getPara();
    echo "test->x : ".$test->x."<br />";
    # echo "test->y12345 : ".$test->y."<br />";
    # echo "test->z : ".$test->z."<br />";

    $testA = new SS();
    $testA->getPara();
    echo "test->x : ".$testA->x."<br />";
    echo "test->y : ".$SS->y."<br />";
    # echo "test->z : ".$testA->z."<br />";
    echo "123";

  ?>