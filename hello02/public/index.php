<?php
require_once '../vendor/autoload.php';

use \CarsQQ\Car;
$mycar = new Car();
$KK= $mycar->setName("Ford...");

echo $KK;
echo $mycar->getName();

use \CarsQQ\CarA;
$mycar = new CarA();
$KK= $mycar->setName("Ford...66");

echo $KK;
echo $mycar->getName();

use CarsQQ\ABC\CarC;
$mycar = new CarC();
$KK= $mycar->setName("Ford...CC");
echo $KK;
echo $mycar->getName();



?>