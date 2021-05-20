<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle
{
    public function switchOn()
    {
        $speed =$this->getCurrentSpeed();
        if ($speed>10) {
            echo "Bike : Light on".PHP_EOL;
            return true;
        }
    }

    public function switchOff()
    {
        echo "Bike : Light off".PHP_EOL;
        return false;
    }
}