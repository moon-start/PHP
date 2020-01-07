<?php
require_once '../vendor/autoload.php';

use \CarsKK\Car;
$mycar = new Car();
$KK= $mycar->setName("Ford...");

echo $KK;
echo $mycar->getName();

use \CarsKK\CarA;
$mycar = new CarA();
$KK= $mycar->setName("Ford...66");

echo $KK;
echo $mycar->getName();

use CarsKK\ABC\CarC;
$mycar = new CarC();
$KK= $mycar->setName("Ford...CC");
echo $KK;
echo $mycar->getName();



?>