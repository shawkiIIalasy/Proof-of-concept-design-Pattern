<?php
class OrExpression implements Expression
{
    private $exp1;
    private $exp2;
    public function __construct($exp1,$exp2)
    {
        $this->exp1=$exp1;
        $this->exp2=$exp2;
    }
    public function interpreter($var)
    {
        return ($this->exp1->interpreter($var) || $this->exp2->interpreter($var));
    }
}