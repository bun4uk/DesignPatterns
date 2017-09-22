<?php
/**
 * Created by PhpStorm.
 * User: v.bunchuk
 * Date: 22.09.17
 * Time: 18:35
 */

namespace DesignPatterns\Creational\AbstractFactory;


abstract class Text
{
    /**
     * @var string
     */
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}