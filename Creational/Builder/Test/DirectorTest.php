<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 27.09.17
 * Time: 22:47
 */

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    /**
     * @dataProvider vehicleDataProvider
     * @param string $vehicle
     * @param string $builder
     */
    public function testCanBuildVehicle(string $vehicle, string $builder)
    {
        $vehicleBuilder = new $builder();
        $newVehicle = (new Director())->build($vehicleBuilder);

        $this->assertInstanceOf($vehicle, $newVehicle);
    }

    /**
     * @return array
     */
    public function vehicleDataProvider()
    {
        return [
            [
                Truck::class,
                TruckBuilder::class
            ],
            [
                Car::class,
                CarBuilder::class
            ]
        ];
    }
}