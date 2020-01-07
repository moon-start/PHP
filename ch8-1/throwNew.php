<?php

## 繼承 Exception 
class EmailFormatException extends Exception {
  function printMessage(){
    echo "例外訊息:" . $this->getMessage() . "<br />";
    ###
    ## Error Message: num can not be 0
    echo "Error Message: ".$this->getMessage()."<br />";
    ## Error Code: 100
    echo "Error Code: ".$this->getCode()."<br />";
  }
}
function checkEmail($email){
  ### 檢查有無 @
  if (!strpos($email,"@"))
    ##### 拋出 自訂的錯誤類別
    throw new EmailFormatException("E-mail需要包含'@'");
}

try {
    checkEmail('gmail.com');
} catch (EmailFormatException $e){
  $e->printMessage();
}
?>