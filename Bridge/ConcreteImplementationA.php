<?php
include "Implementation.php";
class ConcreteImplementationA implements Implementation
{
    public function operationImplementation()
    {
        return "ConcreteImplementationA: Here's the result on the platform A.\n";
    }
}