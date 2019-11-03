<?php
class Duck {
    private $fly;
    private $eat;

    public function __construct($fly,$eat)
    {
        $this->eat=$eat;
        $this->fly=$fly;
    }
    public function fly()
    {
        $this->fly->fly();
    }
    public function eat()
    {
        $this->eat->eat();
    }
}