<?php  
//Initialize array   
$arr = array(1, 2, 3, 4, 5);   
//n determine the number of times an array should be rotated  
$n = 3;  
   
//Displays original array  
print("Original array: <br>");  
for ($i = 0; $i < count($arr); $i++) {   
    print($arr[$i] . " ");   
}    
      
//Rotate the given array by n times toward left  
for ($i = 0; $i < $n; $i++){  
    //Stores the first element of the array  
    $first = $arr[0];  
      
    for($j = 0; $j < count($arr)-1; $j++){  
        //Shift element of array by one  
        $arr[$j] = $arr[$j+1];  
    }  
    //First element of array will be added to the end  
    $arr[$j] = $first;  
}  
   
print("<br>");  
   
//Displays resulting array after rotation  
print("Array after left rotation: <br>");  
for ($i = 0; $i < count($arr); $i++) {   
    print($arr[$i] . " ");   
}      
?>