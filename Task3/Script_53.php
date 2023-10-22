<?php 
// Write a PHP script that removes duplicate values from an associative array using the array_unique() function.

$a = array("red", "green", "red", "blue", "orange", "purple", "purple"); 
print_r($a);
echo "<br/>";
echo "array_unique method : <br/>";
print_r(array_unique($a)); 

?>
