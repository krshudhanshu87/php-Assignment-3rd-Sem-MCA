<?php
// Input number
$num = 12345;
$temp = $num;
$reversed = 0;

while ($temp > 0) {
    $remainder = $temp % 10;
    $reversed = ($reversed * 10) + $remainder;
    $temp = (int)($temp / 10);
}

echo "Original Number: $num<br>";
echo "Reversed Number: $reversed";
?>