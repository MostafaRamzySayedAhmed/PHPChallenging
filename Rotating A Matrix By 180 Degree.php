<?php 
// PHP program to rotate 
// a matrix by 180 degree
// The Used Solution Is Rotating The Matrix Twice By 90 Degree
$N = 3; 

// Function to Rotate the 
// matrix by 180 degree 
function rotateMatrix($mat) 
{ 
	global $N; 
	
	// Simply print from 
	// last cell to first cell. 
	for ($i = $N - 1; $i >= 0; $i--) 
	{ 
		for ($j = $N - 1; $j >= 0; $j--) 
			echo $mat[$i][$j], " "; 
		
	echo "\n"; 
	} 
} 

// Driver Code 
$mat = array(array(1, 2, 3), 
			array(4, 5, 6), 
			array(7, 8, 9)); 

rotateMatrix($mat); 

// This code is contributed by ajit 
?> 