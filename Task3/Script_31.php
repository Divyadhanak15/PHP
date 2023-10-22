<?php
// Develop a PHP script that searches for a specific element in an array using the array_search() function and displays the index if found.

function Search($value, $array)
{
	return (array_search($value, $array));
}

$array = array("Divya","Krishna","Janvi","Alia","Savi");

$value = "Alia";
print_r(Search($value, $array));
?>
