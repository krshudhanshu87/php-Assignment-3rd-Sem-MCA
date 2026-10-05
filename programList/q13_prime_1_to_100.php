<?php
echo "<h3>Prime numbers between 1 and 100:</h3>";

for ($num = 2; $num <= 100; $num++) {
    $isPrime = true;

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $num . " ";
    }
}
?>