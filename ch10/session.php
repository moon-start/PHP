<?php
## 啟動 session
session_start();

## 設定
$_SESSION['memID'] = "A001";
## 取得 session 資訊
$id =  $_SESSION['memID'];
echo "session : $id";

## 清除 session 
unset($_SESSION['memID']);
session_unset();

?>