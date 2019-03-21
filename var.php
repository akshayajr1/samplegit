<?php
define('CHECK_CONSTANT', "yes, I am a constant!");

$intVar= 1234;
$stringVar= "I am a string";
$boolVar= false;
$floatVar=12.43;

echo is_bool($boolVar); echo "\n";
echo is_string($stringVar); echo "\n";
echo is_float($floatVar); echo "\n";
echo is_int($intVar); echo "\n";
echo defined('CHECK_CONSTANT'); echo "\n\n";

echo is_bool($intVar); echo "\n";
echo is_string($boolVar); echo "\n";
echo is_float($stringVar); echo "\n";
echo is_int($floatVar); echo "\n";
echo defined('CHECK_CONSTANT');


?>