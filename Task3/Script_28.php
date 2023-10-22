<?php
// Develop a PHP script that sorts an array of integers in ascending order using the sort() function.

$array1 = array(10,50,38,20,1);
$a=sort($array1);
      
foreach($array1 as $my)
{
	print_r($my."<br/>");
}
?>
