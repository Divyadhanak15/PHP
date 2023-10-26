<?php

$cities = array("Ladakh", "Kashmir", "Paris", "Itly", "Manali");

sort($cities);

$clength = count($cities);
for($x = 0; $x < $clength; $x++) {
  echo $cities[$x];
  echo "<br>";
}

?>