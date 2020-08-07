<?php

// Swapping The Number Variables
// The Way Is For Number Variables Only

$a = 5;
$b = 6;

echo "The Numbers Before Swapping Are ". $a . ',' . $b;

echo "<br>";

$a = $a + $b;  // 5 + 6 = 11
$b = $a - $b;   // 11 - 6 = 5
$a = $a - $b;  // 11 - 5 = 6

echo "The Numbers After Swapping Are ". $a . ',' . $b;

?>