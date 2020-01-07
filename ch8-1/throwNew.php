<?php

## 繼承 Exception 
class EmailFormatException extends Exception {
  function printMessage(){
   
    ###################################
    #### 例外訊息:E-mail需要包含'@'
    ####
    #### Error Message: E-mail需要包含'@'
    #### Error Code: 0
    
    echo "例外訊息:" . $this->getMessage() . "<br />";
    ####
    echo "Error Message: ".$this->getMessage()."<br />";
    echo "Error Code: ".$this->getCode()."<br />";
  }
}
function checkEmail($email){
  ### 檢查有無 @
  if (!strpos($email,"@"))
    ##### 拋出 自訂的錯誤類別
    throw new EmailException("E-mail需要包含'@'");
}

try {
    checkEmail('gmail.com');
} catch (EmailException $e){
  $e->printMessage();
}
?>