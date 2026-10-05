<?php
$elements = ["apple", "banana", "apple", "cherry", "banana", "apple", "date"];

// Count frequencies using built-in array function
$frequency = array_count_values($elements);

echo "<h3>Element Frequencies:</h3>";
foreach ($frequency as $item => $count) {
    echo "$item : $count times<br>";
}
?>