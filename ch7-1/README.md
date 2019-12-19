### 第七章 PHP 進階語法 I
#### GIT指令
+ 語法:
  ```html
    ####### 連結
    cd /usr/share/nginx/html
    git clone git@github.com:moon-start/PHP.git
    git clone https://github.com/moon-start/PHP.git
    ####### 拉取
    cd PHP
    git pull origin master

  ```
#### 函數
+ 函數的作用 : 將功能相同的程式碼提出，以減少撰寫相同功能的程式碼
+ 使用方式
  + 語法 :
    ```php
      // 有數值需要傳遞時，需要設定參數
      // 若無傳遞數值的必要時，可不用設定參數
      function 函數名稱 (參數1,參數2,.....){
          需要執行的程式;

          //無需將執行結果傳出時，可以不用寫回傳值
          return 回傳值;
      }
    ```
  + 例 : ex7_1.php
    ```php
    <?php
      // 顯示名字
      
    ?>
    ```

