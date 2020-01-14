## win10 
+ composer create-project --prefer-dist laravel/laravel PHPproject

## linux

+ git clone https://github.com/moon-start/PHPproject.git

### 查看PHP問題
+ less /var/log/nginx/error.log
+ 按著 Q離開


### composer install的(linux環境) (win10不用)
1. yum install php-xml rsyslog -y
2. systemctl start rsyslog
3. systemctl restart php-fpm


### 顯示 php路由 (linux-win10)
```
php artisan route:list
```
```
php artisan r:l
```

### PHP路由器 (預設url: /public/)
+ routes\web.php

