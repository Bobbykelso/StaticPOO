<?php

require_once 'Vehicle.php';

abstract class HighWay
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;
    // constructeur
    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
        
    }
    //abstract fonction
    abstract public function addVehicle(Vehicle $newVehicle);
    
    //Getters and setters
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;

        return $this;
    }

    
    public function getNbLane()
    {
        return $this->nbLane;
    }

 
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

  
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}