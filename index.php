<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$octane = new Car ('pink', 4, 'Diesel');
$octane->setHasParkBrake(true);
$octane->setCurrentSpeed(2);
try {
    echo $octane->start() . "<br>";
    echo $octane->forward() . "<br>";
    echo $octane->brake() . "<br>";
    echo $octane->brake() . "<br>";
}
catch(Exception $e) {
    echo "Exception Received :" . $e->getMessage();
}
finally {
    echo "Ma voiture roule comme un donut";
};

// interfacePOO

$myCar = new Car('red',2,'electric');
$myBicycle = new Bicycle('red',1);

$myCar->switchOn();
$myCar->switchOff();

$myBicycle->switchOn(0);
$myBicycle->switchOn(15);
$myBicycle->switchOff();