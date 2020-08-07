<?php  
//Initialize array   
$arr = array(1, 2, 3, 4, 2, 7, 8, 8, 3);   
   
print("Duplicate elements in given array: <br>");  
//Searches for duplicate element  
for($i = 0; $i < count($arr); $i++) {  
    for($j = $i + 1; $j < count($arr); $j++) {  
        if($arr[$i] == $arr[$j])  
            print($arr[$j] . "<br>");  
    }  
}  
?>  