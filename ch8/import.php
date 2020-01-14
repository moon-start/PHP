<?php
function __autoload($className){
  $filename = __DIR__ . "/classes/" . $className . ".php";
  if (is_readable($filename)){
    require $filename;
  }
}

## 註冊
## 註冊
## 註冊
spl_autoload_register('__autoload');
?>