<?php
include "ConcreteImplementationA.php";
include "ConcreteImplementationB.php";
include "Abstraction.php";
include "ExtendedAbstraction.php";
function clientCode(Abstraction $abstraction)
{
    // ...

    echo $abstraction->operation();

    // ...
}
$implementation = new ConcreteImplementationA;
$abstraction = new Abstraction($implementation);
clientCode($abstraction);

echo "<br>";

$implementation = new ConcreteImplementationB;
$abstraction = new ExtendedAbstraction($implementation);
clientCode($abstraction);