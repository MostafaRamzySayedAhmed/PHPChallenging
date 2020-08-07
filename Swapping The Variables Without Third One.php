<?php

// Swapping The Number Variables
// The Way Is For Any Variables Types

$a = "Hello";
$b = "World";

echo "The Variables Before Swapping Are ". $a . ',' . $b;

echo "<br>";

list($a, $b) = array($b, $a);

echo "The Variables After Swapping Are ". $a . ',' . $b;

?>