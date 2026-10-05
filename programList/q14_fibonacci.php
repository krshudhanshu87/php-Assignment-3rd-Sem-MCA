<?php
// Number of terms to generate
$terms = 10;

$n1 = 0;
$n2 = 1;

echo "<h3>Fibonacci Series up to $terms terms:</h3>";

for ($i = 1; $i <= $terms; $i++) {
    echo $n1 . " ";
    $nextTerm = $n1 + $n2;
    $n1 = $n2;
    $n2 = $nextTerm;
}
?>