<?php

require_once 'Vehicle.php';

final class MotorWay extends HighWay {
    
    public function __construct($nbLane = 4, $maxSpeed = 130) {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle): string
    {
        if($vehicle instanceof Car || $vehicle instanceof Truck)
        {
            $this->currentVehicles [] = $vehicle;
            $answer = "This vehicle is allowed in this way";
        } else {
            $answer = "This vehicle is not allowed in this way";
        }

    return $answer;
    }
}