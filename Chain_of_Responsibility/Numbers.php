<?php

class Numbers
{
    private $number1;
    private $number2;
    private $calcName;


    public function __construct($number1, $number2, $calcName)
    {
        $this->number1=$number1;
        $this->number2=$number2;
        $this->calcName=$calcName;
    }
    public function getNumber1()
    {
        return $this->number1;
    }
    public function getNumber2()
    {
        return $this->number2;
    }
    public function getCalcName()
    {
        return $this->calcName;
    }

}