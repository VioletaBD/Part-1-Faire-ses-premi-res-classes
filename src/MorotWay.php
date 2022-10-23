<?php

require 'HigWay.php';

final class MotorWay extends HighWay
{
    protected int $nbLane = 4;
    protected int $maxSpeed  = 130;

    public function addVehicle($vehicle)
    {
        if (!$vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}