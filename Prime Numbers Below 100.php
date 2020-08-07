<?php

// Prime Numbers Below 100
// The First 20 Prime Numbers

$arr = array();
for($i=2; $i<100; $i++)
{
    $count=0;
    
    for($j=1; $j<=$i; $j++)
    {
        if(($i % $j) == 0)
        { $count++; }
    }
    
    if ($count<3)
    {
        echo $i." , ";
    }
}

?>