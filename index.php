<?php
require_once 'hello022/vendor/autoload.php';

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