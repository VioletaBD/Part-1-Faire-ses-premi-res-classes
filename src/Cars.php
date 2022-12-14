<?php

require_once 'Vehicle.php';

abstract class Car extends Vehicle
{
    
    public const ALLOWED_ENERGIES = [

        'fuel',
        'electric',

    ];

        
        private string $energy;

        private int $energyLevel;

    
        public function __construct(string $color, int $nbSeats, string $energy, int $energyLevel)

    {

        parent::__construct($color, $nbSeats);

        $this->energy = $energy;

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
        return $this->energyLevel = 10;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


}

?>