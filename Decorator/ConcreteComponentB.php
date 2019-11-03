<?php
class ConcreteComponentB extends Decorator
{
    public function operation()
    {
        return "ConcreteDecoratorB(".parent::operation().")";
    }
}