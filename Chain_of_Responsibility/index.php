<?php
include("Add.php");
include("Sub.php");
include("Mult.php");
include("Divide.php");
include("Numbers.php");

$calcChain1=new Add();
$calcChain2=new Mult();
$calcChain3=new Sub();
$calcChain4=new Divide();

$calcChain1->setChain($calcChain2);
$calcChain2->setChain($calcChain3);
$calcChain3->setChain($calcChain4);


$number=new Numbers(5,2,"Mul");

$calcChain1->calc($number);








?>

