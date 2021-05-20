<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle
{
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;

        public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
       parent::__construct($color, $nbSeats);
    $this->energy = $energy;
   
    }
    public function start() 
    {
        $starting ="";
        if ($this->hasParkBrake) {
            throw new Exception ("Le frein a main est actif");
        }
        $currentSpeed = $this->getCurrentSpeed();
        if ($currentSpeed > 0) {
            $starting = "Vroooooom";
            return $starting;
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setHasParkBrake(bool $hasParkBrake = true): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }
    public function switchOn()
    {
        echo "Car : Light on".PHP_EOL;
        return true;
    }
    public function switchOff()
    {
        echo "Car : Light off".PHP_EOL;
        return false;
    }
}