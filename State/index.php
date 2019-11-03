<?php

namespace RefactoringGuru\State\Conceptual;


class Context
{

    private $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }


    public function transitionTo(State $state)
    {
        echo "Context: Transition to " . get_class($state) . ".<br>";
        $this->state = $state;
        $this->state->setContext($this);
    }


    public function request1()
    {
        $this->state->handle1();
    }

    public function request2()
    {
        $this->state->handle2();
    }
}


abstract class State
{

    protected $context;

    public function setContext(Context $context)
    {
        $this->context = $context;
    }

    abstract public function handle1();

    abstract public function handle2();
}


class ConcreteStateA extends State
{
    public function handle1()
    {
        echo "ConcreteStateA handles request1.<br>";
        echo "ConcreteStateA wants to change the state of the context.<br>";
        $this->context->transitionTo(new ConcreteStateB);
    }

    public function handle2()
    {
        echo "ConcreteStateA handles request2.<br>";
    }
}

class ConcreteStateB extends State
{
    public function handle1()
    {
        echo "ConcreteStateB handles request1.<br>";
    }

    public function handle2()
    {
        echo "ConcreteStateB handles request2.<br>";
        echo "ConcreteStateB wants to change the state of the context.<br>";
        $this->context->transitionTo(new ConcreteStateA);
    }
}

/**
 * The client code.
 */
$context = new Context(new ConcreteStateA);
$context->request1();
$context->request2();