<?php
class Abstraction
{
    protected $implementation;
    public function __construct($implementation)
    {
        $this->implementation=$implementation;
    }
    public function operation()
    {
        return "Abstraction: Base operation with : <br>".$this->implementation->operationImplementation();
    }
}