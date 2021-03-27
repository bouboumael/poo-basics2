<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue', 1);
$bike->setColor = 'blue';
$bike->setCurrentSpeed = 0;

echo $bike->start() . '<br>';
echo $bike->forward();
echo '<br> Bike speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Bike speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>' . $bike->start();

echo '<br><br>';

$car = new Car('green', 4, 'electric');
echo $car->start() . '<br>';
echo $car->forward();
echo '<br> car speed : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> car speed : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br>' . $car->start();

