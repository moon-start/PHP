<?php
## 1.
header("Location: http://google.com");
## 2.
header("Location: session.php");
## 3.更新
header("Refresh: 5"); //每五秒更新一次網頁
## 5.
header("Refresh: 5;url=session.php");
?>