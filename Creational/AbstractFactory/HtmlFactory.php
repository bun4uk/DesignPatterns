<?php
/**
 * Created by PhpStorm.
 * User: v.bunchuk
 * Date: 22.09.17
 * Time: 18:35
 */

namespace DesignPatterns\Creational\AbstractFactory;


class HtmlFactory extends AbstractFactory
{
    public function createText(string $context): Text
    {
        return new HtmlText($context);
    }
}