<?php
class Divide implements Chain
{
    private  $nextChain;
    public function setChain($chain)
    {
        $this->nextChain=$chain;
    }

    public function calc($numbers)
    {
        if($numbers->getCalcName()=="Div")
        {
            print($numbers->getNumber1() . "/" . $numbers->getNumber2()."=".($numbers->getNumber1()/$numbers->getNumber2()));
        }else
        {
            print("Only Add, Sub, Div, Mul, We Calculate");
        }
    }
}