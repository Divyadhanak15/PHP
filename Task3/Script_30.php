<?php 
// Create a PHP script that removes duplicate values from an array using the array_unique() function.

$a=array("red", "green", "red", "blue");

echo "Before : ";
echo "<br/>";
print_r($a);
echo "<br/>";
 
echo "After : ";
echo "<br/>"; 
print_r(array_unique($a)); 

?> 
