<?php

// Getting The Multiply Of A Given Initilaizing Number Until A Given Length

function multiply ($init, $length)
{
    $z = 0;
    for($i=0; $i<$length; $i++)
    {
        $z += $init;
        echo $z."<br>";
    }
}

$output = multiply(3, 15);
echo $output;

?>