<?php

require_once 'bike.php';
require_once 'car.php';
$bike = new Bicycle('yellow');
var_dump($bike);
$bike->setColor("blue");
$bike->setCurrentSpeed(0);
var_dump($bike);
echo $bike->forward();
var_dump($bike);
echo $bike->brake();
var_dump($bike);
$rockrider= new Bicycle('red');
$rockrider->setColor('yellow');
$tornado=new Bicycle('gray');
$tornado->setColor('black');
$tornado->forward();
var_dump($tornado);
echo $tornado->getColor();
$tornado->setColor('green');
echo $tornado->getColor();


$car= new Car('yellow', 5, 'diesel');
//start the engine
$car->start();
$car->forward();
echo $car->getCurrentSpeed();
echo "<br>";
$car->brake();
echo "<br>";
echo $car->getCurrentSpeed();
var_dump($car);
echo "<br>";
echo $car->getColor();
echo "<br>";
echo $car->getEnergy();
echo "<br>";
echo $car->getEnergyLevel();
