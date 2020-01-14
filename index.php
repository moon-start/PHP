<?php
require_once 'hello/vendor/autoload.php';

use Cars\Car;
$mycar = new Car();
$KK= $mycar->setName("Ford...");
echo $KK;
echo $mycar->getName();

?>