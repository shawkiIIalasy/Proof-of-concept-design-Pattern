<?php
class Facade
{
    protected $subsystem1;

    protected $subsystem2;
    
    public function __construct(
        Subsystem1 $subsystem1 = null,
        Subsystem2 $subsystem2 = null
    ) {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1;
        $this->subsystem2 = $subsystem2 ?: new Subsystem2;
    }

    
    public function operation()
    {
        $result = "Facade initializes subsystems:<br>";
        $result .= $this->subsystem1->operation1();
        $result .= $this->subsystem2->operation1();
        $result .= "Facade orders subsystems to perform the action:<br>";
        $result .= $this->subsystem1->operationN();
        $result .= $this->subsystem2->operationZ();

        return $result;
    }
}