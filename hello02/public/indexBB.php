<?php
require_once '../vendor/autoload123456.php';

use \CarsAA\Car;
$mycar = new Car();
$KK= $mycar->setName("Ford...");
echo $KK;
echo $mycar->getName();
 
use \CarsAA\CarA;
$mycar = new CarA();
$KK= $mycar->setName("Ford...66");
echo $KK;
echo $mycar->getName();



?>