<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 27.09.17
 * Time: 22:27
 */

namespace DesignPatterns\Creational\Builder\Parts;

/**
 * Class Vehicle
 * @package DesignPatterns\Creational\Builder\Parts
 */
abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart(string $key, object $value)
    {
        $this->data[$key] = $value;
    }
}