<?php 
// Write a PHP script to filter the elements of an array based on a specified condition using the array_filter() function.

function Even($array) 
{ 

	if($array%2==0) 
	return TRUE; 
	else
	return FALSE; 
} 

$array = array(12, 0, 0, 18, 27, 0, 46,23, 10); 
print_r(array_filter($array, "Even")); 

?> 
