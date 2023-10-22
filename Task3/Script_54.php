<?php
//Create a PHP script that extracts a specific column from a multidimensional array using the array_column() function.

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    )
);
 
$first_names = array_column($records, 'first_name');
print_r($first_names);
?>