<?php
// Number to calculate factorial for
$num = 5;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "Factorial of $num is: $factorial";
?>