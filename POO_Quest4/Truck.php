<?php

require_once 'Vehicle.php';

class Truck extends Vehicle {
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        ];

    private string $energy;
    private int $energyLevel;
    private int $cargo = 0;
    private int $capacity;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity) {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }
    
    public function getEnergy(): string {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        } return $this;
    }

    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void {
        $this->energyLevel = $energyLevel;
    }

    public function getCargo(): int {
        return $this->cargo;
    }

    public function setCargo(int $cargo): void {
        $this->cargo = $cargo;
    }

    public function getCapacity(): int {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void {
        $this->capacity = $capacity;
    }

    public function fill(): string {
        if ($cargo < $capacity) {
            return 'in filling';
        } elseif ($cargo = $capacity) {
            return 'full';
        } elseif ($cargo > $capacity) {
            return 'overload';
        }
    }
    
}
