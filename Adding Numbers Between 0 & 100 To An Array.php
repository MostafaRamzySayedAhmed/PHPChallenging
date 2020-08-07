<?php

// Pushing Numbers Between 0 & 100 In An Array

$arr = array();

for($i=0; $i<=100; $i++)
{
	
	array_push($arr, $i);
    
    if(count($arr) == 101)
    print_r($arr);
		
}

?>