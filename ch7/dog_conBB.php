

<?php
### 繼承 覆寫
include "dog_con.php";

class dog_conBB extends dog_con{
  protected $size;

  public function __construct($name,$color,$style,$size){
    parent::__construct($name,$color,$style);
    $this->size = $size;
  }

  
  # // 覆寫狗叫的 function
  public function dogBark(){
    echo "狗叫...但小聲....";
    # //呼叫父類別的 dogBark()

    # __destruct() + dogRun(){
    # 狗狗跑步中...狗狗回家了...
    parent::dogBark();
  }
}


# $myDog = new dog_con("來福","白色","台狗土狗");
# $myDog->dogBark();

# $myDogA = new dog_conBB("來福","白色","台狗土狗");
# echo $myDogA->dogBark();

$mydog = new dog_conBB("Windy","白色","貴賓狗",30);
echo $mydog->dogBark();
?>