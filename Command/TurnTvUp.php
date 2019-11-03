<?php
class TurnTvUp implements Command
{
    private $electronicDevice;
    public function __construct($electronicDevice)
    {
        $this->electronicDevice=$electronicDevice;
    }
    public function execute()
    {
        $this->electronicDevice->volumeUp();
    }
}