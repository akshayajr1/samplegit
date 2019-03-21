<?php

$authors= array(
    "q" => "Charles Dickens",
    20 => "Jane Austin",
    "poetic" => "William Shakespeare",
"dead"=>"Mark Twin"
);

foreach($authors as $value)
{
    print $value."\n";
}
foreach($authors as $key=> $value)
{
print $value."(.$key\n)";
}
?>