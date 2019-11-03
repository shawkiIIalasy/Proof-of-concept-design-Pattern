<?php
include ("Mediator.php");
class ConcreteMediator implements Mediator
{
    private $componet1;
    private $componet2;
    public function __construct($componet1,$componet2)
    {
        $this->componet1=$componet1;
        $this->componet1->setMediator($this);
        $this->componet2=$componet2;
        $this->componet2->setMediator($this);
    }

    public function notify($render, $event)
    {
       if($event=="A")
       {
           $this->componet2->doC();
       }

       if($event=="D")
       {
           $this->componet1->doB();
           $this->componet2->doC();
       }
    }
}