<?php
  class Person {
      private $sex;

      ######  
      public function __set($name, $value){
        
        // 限制不可動態產生屬性
        ### 設定成員的內容
        ### if 有這成員[1] 沒有..的話[]
        if (isset($this->$name)) {
            return $this->$name = $value;
        } else {
            return null;
        }
      }
      // 取得屬性名稱的值
      public function __get($name){
        return $name;
      }
      // 判斷是否有該屬性參數 [1] [0]  
      public function __isset($name){
        return $name;
      }
      // 取消該屬性
      public function __unset($name){
        return $name;
      }
    }
    
    $person = new Person();
    //Person 類別沒有 name 這個屬性名稱
    //PHP_EOL 空隔或是換行
    $person->name = 'PHP';

    // unset($person->name);
    echo $person->name.PHP_EOL;  ## PHP
    echo $person->name;


    // sex 這個屬性是無法取得的
    echo $person->sex.PHP_EOL;   ## sex

    #### 有輸出[1]
    # echo isset($person->address);
    // unset($person->name);
?>