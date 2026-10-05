<?php
// Declare variables of integer, float, string, and boolean types
$integerVar = 42;
$floatVar = 3.14159;
$stringVar = "Hello PHP";
$boolVar = true;

// Display values along with their data types using gettype()
echo "Value: " . $integerVar . " | Data Type: " . gettype($integerVar) . "<br>";
echo "Value: " . $floatVar . " | Data Type: " . gettype($floatVar) . "<br>";
echo "Value: " . $stringVar . " | Data Type: " . gettype($stringVar) . "<br>";
echo "Value: " . ($boolVar ? 'true' : 'false') . " | Data Type: " . gettype($boolVar) . "<br>";
?>