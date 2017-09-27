<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 27.09.17
 * Time: 22:32
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

/**
 * Interface BuilderInterface
 * @package DesignPatterns\Creational\Builder
 */
interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}