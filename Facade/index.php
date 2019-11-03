<?php
include "Subsystem1.php";
include "Subsystem2.php";
include "Facade.php";
function clientCode(Facade $facade)
{
    // ...

    echo $facade->operation();

    // ...
}

$subsystem1 = new Subsystem1;
$subsystem2 = new Subsystem2;
$facade = new Facade($subsystem1, $subsystem2);
clientCode($facade);