<?php
function __autoloadB($className){
  $filename = __DIR__ . "/classesB/" . $className . ".php";
  if (is_readable($filename)){
    require $filename;
  }
}

## 註冊
spl_autoload_register('__autoloadB');
?>