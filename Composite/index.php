<?php
include "Leaf.php";
include "Composite.php";
function clientCode(Component $component)
{
    // ...

    echo "RESULT: " . $component->operation();

    // ...
}
$tree = new Composite;
$branch1 = new Composite;
$branch1->add(new Leaf);
$branch1->add(new Leaf);
$branch2 = new Composite;
$branch2->add(new Leaf);
$tree->add($branch1);
$tree->add($branch2);
$branch3=new Composite;
$branch3->add(new Leaf);
$branch2->add($branch3);

echo "Client: Now I've got a composite tree:<br>";
echo "<br><br>";
clientCode($tree);

