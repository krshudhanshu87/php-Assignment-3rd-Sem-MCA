<?php
// Year to test
$year = 2024;

// A leap year is divisible by 4, but not by 100 unless it is also divisible by 400
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a Leap Year.";
} else {
    echo "$year is not a Leap Year.";
}
?>