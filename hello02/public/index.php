<?php
require_once '../vendor/autoload.php';

use \Cars\Car;
$mycar = new Car();
$KK= $mycar->setName("Ford...");

echo $KK;
echo $mycar->getName();

use \Cars\CarA;
$mycar = new CarA();
$KK= $mycar->setName("Ford...66");

echo $KK;
echo $mycar->getName();
?>