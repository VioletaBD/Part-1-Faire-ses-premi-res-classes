<?php
class Cars
{
    private string $color;


    private int $currentSpeed;


    private int $nbSeats = 5;


    private int $nbWheels = 4;

    private string $energy;
    
    private int $energyLevel = 3;



    public function forward(): string
    {
        $this->currentSpeed = 200;
    
        return "Go !";
    }
    
    public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }
    
    
    public function dump()
    
    {
    
        var_dump($this);
    
    }
    


public function getColor(): string
{
    return $this->color;
}
public function setColor(string $color): void
{
    $this->color = $color;
}


public function __construct(string $color)
{
    $this->color = $color;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
    }
}

public function getEnergy(): string
{
    return $this->gasoline;
}

public function setEnergy(string $energy): void
{
    $this->gasoline = $electric;
}

public function getEnergyLevel(): int
{
    return $this->energyLevel;
}

public function setEnergyLevel(int $energyLevel): void
{
    if($energyLevel >= 0) {
        $this->energyLevel = $energyLevel;
    }
}

}

?>