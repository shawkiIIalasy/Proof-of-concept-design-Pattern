<?php
include "Decorator.php";
class ConcreteComponentA extends Decorator
{
    public function operation()
    {
        return "ConcreteDecoratorA(".parent::operation().")";
    }
}