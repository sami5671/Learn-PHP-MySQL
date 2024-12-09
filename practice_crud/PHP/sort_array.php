<?php
$numbers = [5, 3, 8, 1, 9];

// Ascending order
sort($numbers);
echo "Ascending Order: " . implode(", ", $numbers) . "<br>";

// Descending order
rsort($numbers);
echo "Descending Order: " . implode(", ", $numbers);
?>
