<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    public const ALLOWED_ENERGIES = [

        'fuel',
        'electric',

    ];

    private int $storageCapacity;

    private int $loading;

    private string $energy;

    private int $energyLevel;

   
    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity, string $loaded)

    {

        parent::__construct($color, $nbSeats);
    
        $this->energy = $energy;
        $this->StorageCapacity = $storageCapacity;
        $this->loaded = $loaded;
}




}