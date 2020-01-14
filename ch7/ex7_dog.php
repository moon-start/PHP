<?php
    include "dog.php";
    $mydog = new dog();
    $mydog->age = 20;
    echo "我的狗年紀 : ".$mydog->getAge();
?>