<?php
// Develop a PHP script to remove and replace elements from an array using the array_splice() function.

echo "Original :-<br/> ";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print_r($a1);
echo "<br/>";

echo "array_splice method <br/>";
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);
?>