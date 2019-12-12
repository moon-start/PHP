<?php
    // 變數 a 沒宣告就使用,會產生 E_NOTICE 的警告
    echo '$a: '.$a.'<be />';
    $name = 100;
    echo '$name: '.$name.'<be />';
    $name = 'David';
    echo '$name: '.$name.'<be />';
    $a = $a + 100;
    echo '$a: '.$a.'<be />';
?>