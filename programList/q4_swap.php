<?php
// Original values
$x = 15;
$y = 40;

echo "Before Swapping: x = $x, y = $y<br>";

// Swapping using arithmetic operations
$x = $x + $y; // $x becomes 55
$y = $x - $y; // $y becomes 15 (original $x)
$x = $x - $y; // $x becomes 40 (original $y)

echo "After Swapping: x = $x, y = $y<br>";
?>