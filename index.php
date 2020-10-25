<?php
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'Motorway.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$residentiaway = new ResidentialWay();
$pedestrianway = new PedestrianWay();
$motorway= new Motorway();

echo $residentiaway -> getNbLane();
echo $pedestrianway -> getNbLane();
echo $motorway -> getNbLane();

$newcar = new Car('blue',2,'gasoil');
$littleway = new PedestrianWay();

echo $littleway -> addVehicle($newcar);