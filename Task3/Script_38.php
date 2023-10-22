<?php
// Write a PHP script to use the array_shift() function to remove an element from the beginning of an array and the array_unshift() function to add elements at the beginning.

print_r("Original:- </br>");
$a = array("orange", "banana", "apple", "raspberry");
print_r($a);
echo "<br/>";
echo "<br/>";

print_r("array_shift method </br>");
$fruit = array_shift($a);
print_r($a);
echo "<br/>";
echo "<br/>";

print_r("array_unshift method </br>");
array_unshift($a,"pineapple");
print_r($a);
?>