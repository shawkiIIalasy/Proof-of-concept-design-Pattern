<?php
class Mult implements Chain
{
    private  $nextChain;
    public function setChain($chain)
    {
        $this->nextChain=$chain;
    }

    public function calc($numbers)
    {
        if($numbers->getCalcName()=="Mul")
        {
            print($numbers->getNumber1() . "*" . $numbers->getNumber2()."=".($numbers->getNumber1()*$numbers->getNumber2()));
        }else
        {
            $this->nextChain->calc($numbers);
        }
    }
}