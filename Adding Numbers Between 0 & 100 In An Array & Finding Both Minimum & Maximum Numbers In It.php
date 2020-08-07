<?php

// Pushing Numbers Between 0 & 100 In An Array & Finding Both Minimum & Maximum Numbers In It

$arr = array();

for($i=0; $i<=100; $i++)
{
    
    array_push($arr, $i);
		
}

echo "The Minimum Number Is ". current($arr). " & Tha Maximum Number Is ". end($arr); 

?>