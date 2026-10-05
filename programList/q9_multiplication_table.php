<?php
// Number to generate table for
$num = 7;

echo "<h3>Multiplication Table of $num</h3>";

for ($i = 1; $i <= 10; $i++) {
    $result = $num * $i;
    echo "$num x $i = $result<br>";
}
?>