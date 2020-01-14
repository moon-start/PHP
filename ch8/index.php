<?php
//這是 index.php
include_once __DIR__ . "/import.php";
include_once __DIR__ . "/importB.php";


$member = new AA();
$member->getAA(); 

$second = new BB();
$second->getBB();
?>