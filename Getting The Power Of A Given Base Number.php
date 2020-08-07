<?php
/*
* Solution 1
function get_power($base, $exponent)
{ return pow($base, $exponent); }
$result = get_number(2, 3);
echo "The Power Of " . $base " When It Is Raised By " . $exponent . " Is ". $result;
*/
// Solution 2
function get_power($base,$exponent)
{
    // multiply the base to itself exponent number of times
    $result=1;
    for($i=1;$i<=$exponent;$i++)
    {
      $result = $result * $base;  
    }
    return $result;
}
?>