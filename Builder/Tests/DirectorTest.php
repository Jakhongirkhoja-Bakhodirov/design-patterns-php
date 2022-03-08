<?php

declare(strict_types=1);

namespace Builder\Tests;

set_include_path('D:\education-tutorial-code\PHP\design-patterns');

require 'vendor/autoload.php';



use Builder\Parts\Car;
use Builder\Parts\Truck;
use Builder\TruckBuilder;
use Builder\CarBuilder;
use Builder\Director;
use PHPUnit\Framework\TestCase;


class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
