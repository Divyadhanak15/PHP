<?php
// Create a PHP script that finds the difference between two arrays using the array_diff() function.

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","i"=>"black");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
?>