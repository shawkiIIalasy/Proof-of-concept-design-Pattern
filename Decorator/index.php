<?php
include "ConcreteComponent.php";
include "ConcreteComponentA.php";
include "ConcreteComponentB.php";
function clientCode(Component $component)
{

    echo "RESULT: " . $component->operation();
    
}


$simple = new ConcreteComponent;
echo "Client: I've got a simple component:<br>";
clientCode($simple);
echo "<br><br>";

$decorator1 = new ConcreteComponentA($simple);
$decorator2 = new ConcreteComponentB($decorator1);
$simple2=new ConcreteComponentB($decorator2);
echo "Client: Now I've got a decorated component:<br>";
clientCode($simple2);
