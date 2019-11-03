<?php
include "Component.php";
class ConcreteComponent implements Component
{

    public function operation()
    {
        return "ConcreteComponnent";
    }
}