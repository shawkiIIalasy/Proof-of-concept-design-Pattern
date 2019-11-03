<?php
class BaseComponent
{
    public $mediator;

    public function __construct()
    {
    }

    public function setMediator($mediator)
    {
        $this->mediator=$mediator;
    }

}