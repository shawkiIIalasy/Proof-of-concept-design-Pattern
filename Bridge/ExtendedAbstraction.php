<?php
class ExtendedAbstraction extends Abstraction
{
    public function operation()
    {
        return "ExtendedAbstraction : Extended operation with <br>".$this->implementation->operationImplementation();
    }
}