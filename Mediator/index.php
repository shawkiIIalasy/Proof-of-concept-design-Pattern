<?php
include ("Component1.php");
include ("Component2.php");
include ("ConcreteMediator.php");
$c1 = new Component1;
$c2 = new Component2;
$mediator = new ConcreteMediator($c1, $c2);

echo "Client triggers operation A.<br>";
$c1->doA();

echo "<br>";
echo "Client triggers operation D.<br>";
$c2->doC();

echo "<br>";
echo "Client triggers operation D.<br>";
$c2->doD();