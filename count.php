<?php
$authors= array("charles Dickens",
"Jane Austin",
"William shakeshpeare",
"Mark Twain"
);

print count($authors);

$authors= array(
    "male"=>array(
    "charles Dickens"=>array("A christmas carol", "oliver teist"),
    "William shakeshpeare"=>array("the adventures of Tom Sawyer")
    ),
    "Female"=>array(
        "L.M Montgomery"=>array("anne of green Gables"),
        "Losia May alcott"=>array("little women")
    )
    );
print_r($authors["male"]);
?>