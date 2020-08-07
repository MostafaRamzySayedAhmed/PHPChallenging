<?php

// Pushing The Even Numbers Between 0 & 100 In An Array

$arr = array();

for($i=0; $i<=100; $i++)
{
	
    if($i % 2 == 0)
    // if($i % 2 == 1) continue; 
        
    {
        array_push($arr, $i);

        print_r($arr); 
    
    }
		
}

?>