<?php 
// Develop a PHP script that uses the array_push() function to add elements to an array and the array_pop() function to remove elements from the end.

$arr = array(); 

array_push($arr, 1, 2, 3, 4); 

print_r("array_push method </br>"); 
print_r($arr); 
echo "<br/>";

array_pop($arr);
print_r("Array_pop method </br>"); 
print_r($arr); 

?>
