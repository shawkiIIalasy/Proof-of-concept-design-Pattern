<?php
class Sub implements Chain
{
    private  $nextChain;
    public function setChain($chain)
    {
        $this->nextChain=$chain;
    }

    public function calc($numbers)
    {
        if($numbers->getCalcName()=="Sub")
        {
            $substruct=$numbers->getNumber1()-$numbers->getNumber2();
            print($numbers->getNumber1() . "-" . $numbers->getNumber2()."=".$substruct);
        }else
        {
            $this->nextChain->calc($numbers);
        }
    }
}