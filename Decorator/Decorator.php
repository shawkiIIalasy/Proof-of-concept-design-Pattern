<?php
class Decorator implements  Component
{
    protected $component;
    public function __construct($component)
    {
        $this->component=$component;
    }

    public function operation()
    {
    return $this->component->operation();
    }
}