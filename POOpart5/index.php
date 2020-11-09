<?php
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Vehicle.php';
require_once 'Skate.php';
require_once 'Car.php';
require_once 'HighWay.php';
require_once 'Motorway.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

$bicycle = new Bicycle('blue', 1);
$totoSkate = new Skate("green", 0,4);
$car = new Car('green', 4, 'electric', true);
$totoTruck = new Truck('red', 1,'fuel',20);

echo $bicycle->forward();
var_dump($bicycle);

echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);


$totoTruck->setCurrentSpeed(20);
var_dump($totoTruck);
echo $totoTruck->forward();
echo'<br> Vitesse du camion de toto : ' . $totoTruck->getCurrentSpeed() . 'km/h' . '<br>';
echo $totoTruck->brake().'<br>';

$totoTruck->setStock(10);
echo '<br> Est ce que le camion de toto est plein de carburant? : ' .$totoTruck->fuelLevel() . ' non' . '<br>';
$totoTruck->setStock(20);
echo '<br> Est ce que le camion de toto est plein de carburant? : ' .$totoTruck->fuelLevel() . ' Vroom, vroom !!' . '<br>';


$bigRoad = new MotorWay([],4,130);
$bigRoad->addVehicle($bicycle);
$bigRoad->addVehicle($totoTruck);
$bigRoad->addVehicle($car);
$bigRoad->addVehicle($totoSkate);
var_dump($bigRoad);
$mediumRoad = new ResidentialWay([],2,50);
$mediumRoad->addVehicle($bicycle);
$mediumRoad->addVehicle($totoTruck);
$mediumRoad->addVehicle($car);
$mediumRoad->addVehicle($totoSkate);
var_dump($mediumRoad);
$smallRoad = new PedestrianWay([],1,10);
$smallRoad->addVehicle($bicycle);
$smallRoad->addVehicle($totoTruck);
$smallRoad->addVehicle($car);
$smallRoad->addVehicle($totoSkate);
var_dump($smallRoad);

try {
    $totoCar = new Car("blue", 4, "electric", true);
    echo $totoCar->start();
}
 catch (Exception $e) {
    echo 'Exception reçue : '. $e->getMessage();
    echo '<br> Changement status frein à main';
    $totoCar->setParkBrake(false);
    echo '<br>'.$totoCar->start();
} finally {
    echo "<br>";
    echo "Ma voiture roule comme un donut";
}

