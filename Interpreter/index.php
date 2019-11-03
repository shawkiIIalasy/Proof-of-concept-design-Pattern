<?php
include ("TerminalExpression.php");
include ("AndExpression.php");
include ("OrExpression.php");
    $expression1=new TerminalExpression("Ahmed");
    $expression2=new TerminalExpression("Mohammed");
    $orExpression=new OrExpression($expression1,$expression2);

    var_dump ($orExpression->interpreter("Ahmed"));

    var_dump ($orExpression->interpreter("Mohammed"));
    var_dump ($orExpression->interpreter("Khaled"));

    $expression1=new TerminalExpression("ALi");
    $expression2=new TerminalExpression("taha");
    $andExpression=new AndExpression($expression1,$expression2);


    var_dump ($andExpression->interpreter("Khaled djfgsbdjfgjwedhsfjhdsioh"));
    var_dump ($andExpression->interpreter("ALi taha"));
    var_dump( $andExpression->interpreter("taha"));