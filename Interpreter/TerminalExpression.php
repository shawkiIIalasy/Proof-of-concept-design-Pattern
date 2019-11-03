<?php
include ("Expression.php");
class TerminalExpression implements Expression
{
    private $data;
    public function __construct($data)
    {
        $this->data=$data;
    }

    public function interpreter($var)
    {
        if(strpos($var,$this->data)>-1)
        {
            return true;
        }else{
            return false;
        }
    }
}