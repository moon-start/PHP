<?php
## 1.錯誤..但繼續?
header("Location: http://google.com");
## 2.Location會覆蓋上面
header("Location: sessionXXX999.php");

## 3.更新
header("Refresh: 5"); //每五秒更新一次網頁
## 5.覆蓋...?
header("Refresh: 2;url=sessionXX55.php");
header("Refresh: 5;url=session.php");
?>