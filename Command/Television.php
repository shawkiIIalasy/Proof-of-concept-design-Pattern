<?php
include ("ElectronicDevice.php");
class Television implements ElectronicDevice
{
    private $volume = 0;
    public function on()
    {
        print("The Television is On <br>");
    }

    public function off()
    {
        print("The Television is Off <br>");
    }

    public function volumeUp()
    {
        $this->volume++;
        print("The Volume is ".$this->volume.'<br>');
    }

    public function volumeDown()
    {
        $this->volume--;
        print("The Volume is ".$this->volume.'<br>');
    }
}