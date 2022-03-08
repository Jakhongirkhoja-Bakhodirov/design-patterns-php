<?php

declare(strict_types=1);

namespace Builder;

require 'Builder/Parts/Door.php';
require 'Builder/Parts/Engine.php';
require 'Builder/Parts/Wheel.php';
require 'Builder/Parts/Vehicle.php';

use Builder\Parts\Door;
use Builder\Parts\Engine;
use Builder\Parts\Wheel;
use Builder\Parts\Car;
use Builder\Parts\Vehicle;

class CarBuilder implements Builder
{
    private Car $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
