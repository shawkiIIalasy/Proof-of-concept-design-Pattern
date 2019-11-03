<?php
include("Chain.php");
class Add implements Chain
{
    private  $nextChain;
    public function setChain($chain)
    {
        $this->nextChain=$chain;
    }

    public function calc($numbers)
    {

        if($numbers->getCalcName()=="Add")
        {
            $adding=$numbers->getNumber1()+$numbers->getNumber2();
            print($numbers->getNumber1() . "+" . $numbers->getNumber2()."=".$adding);
        }else
        {
            $this->nextChain->calc($numbers);
        }
    }
}