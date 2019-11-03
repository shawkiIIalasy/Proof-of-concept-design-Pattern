<?php
include ("Command.php");
class TurnTvOn implements Command
{
    private $electronicDevice;
    public function __construct($electronicDevice)
    {
        $this->electronicDevice=$electronicDevice;
    }
    public function execute()
    {
        $this->electronicDevice->on();
    }
}