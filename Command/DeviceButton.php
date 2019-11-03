<?php
class DeviceButton
{
    private $command;
    public function __construct($command)
    {
        $this->command=$command;
    }
    public function press()
    {
        $this->command->execute();
    }
}