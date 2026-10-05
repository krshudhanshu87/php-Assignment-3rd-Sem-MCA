<?php
// Two input numbers
$a = 25;
$b = 7;

// Calculations
$sum        = $a + $b;
$difference = $a - $b;
$product    = $a * $b;
$quotient   = $a / $b;
$modulus    = $a % $b;

// Displaying results
echo "First Number: $a<br>";
echo "Second Number: $b<br><br>";

echo "Addition ($a + $b) = " . $sum . "<br>";
echo "Subtraction ($a - $b) = " . $difference . "<br>";
echo "Multiplication ($a * $b) = " . $product . "<br>";
echo "Division ($a / $b) = " . $quotient . "<br>";
echo "Modulus ($a % $b) = " . $modulus . "<br>";
?>