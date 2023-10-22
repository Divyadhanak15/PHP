<?php
// Create a PHP script to check if a specific key exists in an associative array using the array_key_exists() function.

	function Exists($index, $array)
	{
		if (array_key_exists($index, $array))
		{
			echo "Found the Key";
		}
		else
		{
			echo "Key not Found";
		}
	}

	$array = array(
		"JAVA" => 25,
		"CSS" => 10,
		"HTML" => 20,
		"PHP",
		"C++" => 25
	);
    
	$index = "PHP";
	print_r(Exists($index, $array));
?>
