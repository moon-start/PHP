<?php
  do{
  echo "這是第一層迴圈！<br />";
    while (true){
      echo "這是第二層迴圈！<br />";
      break 2;
    }
  } while (true);
 
  echo "己跳出二層迴圈！";
?>