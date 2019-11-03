<?php
include ("BaseComponent.php");
class Component1 extends BaseComponent
{
    public function doA()
    {
        echo "Component 1 does A.<br>";
        $this->mediator->notify($this, "A");
    }

    public function doB()
    {
        echo "Component 1 does B.<br>";
        $this->mediator->notify($this, "B");
    }
}