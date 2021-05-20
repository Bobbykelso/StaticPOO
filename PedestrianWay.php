  
<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }

    public function addVehicle(Vehicle $newVehicle)
    {
        if ($newVehicle instanceof Car || $newVehicle instanceof Truck)
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