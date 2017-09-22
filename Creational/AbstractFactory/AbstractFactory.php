<?php
/**
 * Created by PhpStorm.
 * User: v.bunchuk
 * Date: 22.09.17
 * Time: 18:26
 */

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class AbstractFactory
 * In this case, the abstract factory is a contract for creating some components
 * for the web. There are two ways of rendering text: HTML and JSON
 * @package DesignPatterns\Creational\AbstractFactory
 */
abstract class AbstractFactory
{
    abstract public function createText(string $context): Text;
}