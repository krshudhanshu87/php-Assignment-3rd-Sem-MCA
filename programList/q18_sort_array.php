<?php
$numbers = [42, 12, 88, 3, 27, 65];

echo "Original Array: " . implode(", ", $numbers) . "<br><br>";

// Sort Ascending
$ascNumbers = $numbers;
sort($ascNumbers);
echo "Ascending Order: " . implode(", ", $ascNumbers) . "<br>";

// Sort Descending
$descNumbers = $numbers;
rsort($descNumbers);
echo "Descending Order: " . implode(", ", $descNumbers) . "<br>";
?>