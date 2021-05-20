<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }

    public function addVehicle(Vehicle $newVehicle)
    {
        if ($newVehicle instanceof Bicycle || $newVehicle instanceof Skateboard)
        {
       echo "Vous n'etes pas autorisés a rouler ici" ;
        }
     else
     { 
        $this->currentVehicules[] = $newVehicle;
        echo "Vous pouvez rouler ici";
     }
    }

}