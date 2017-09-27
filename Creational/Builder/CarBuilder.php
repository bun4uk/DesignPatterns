<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 27.09.17
 * Time: 22:40
 */

namespace DesignPatterns\Creational\Builder;


use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Vehicle;
use DesignPatterns\Creational\Builder\Parts\Wheel;

class CarBuilder implements BuilderInterface
{
    /**
     * @var Car
     */
    private $car;

    /**
     * addDoors
     */
    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    /**
     * addEngine
     */
    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    /**
     * addWheels
     */
    public function addWheel()
    {
        $this->car->setPart('wheel1', new Wheel());
        $this->car->setPart('wheel2', new Wheel());
        $this->car->setPart('wheel3', new Wheel());
        $this->car->setPart('wheel4', new Wheel());
    }

    /**
     * createVehicle
     */
    public function createVehicle()
    {
        $this->car = new Car();
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}