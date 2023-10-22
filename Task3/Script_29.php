<?php
// Write a PHP script to reverse the elements of an array using the array_reverse() function.

$array = array("Hello", "Everyone", "Good", "Morning");

function Reverse($array)
{
	return(array_reverse($array));
}

print_r(Reverse($array));

?>
