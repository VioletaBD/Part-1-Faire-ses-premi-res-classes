<?php

require_once 'Vehicle.php';

abstract class Truck extends Vehicle
{
    private int $storageCapacity;

    private int $loading;

    private string $energy;

    private int $energyLevel;

    
    public const ALLOWED_ENERGIES = [

        'fuel',
        'electric',

    ];

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity, string $loaded)

    {

        parent::__construct($color, $nbSeats);
    
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
        $this->loaded = $loaded;
    }


    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoading()
    {
        return $this->loading;
    }
    
    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function fullLoading (int $loading): string
    {
        $sentence = "Loading, please wait...";

        while($this->loading < 100)
        if($this->loading == $this->storageCapacity) {
            $sentence = 'The truck is loaded.';
        }
        return $sentence;
    }

}