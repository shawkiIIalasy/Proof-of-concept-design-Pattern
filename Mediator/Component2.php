<?php
class Component2 extends BaseComponent
{
    public function doC()
    {
        echo "Component 2 does C.<br>";
        $this->mediator->notify($this, "C");
    }

    public function doD()
    {
        echo "Component 2 does D.<br>";
        $this->mediator->notify($this, "D");
    }
}