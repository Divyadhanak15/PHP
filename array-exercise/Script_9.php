<?php

$array = array("apple","black", "white", "pink", "sky");

sort($array);

$clength = count($array);
for($x = 0; $x < $clength; $x++) {
  echo $array[$x];
  echo "<br>";
}


?>