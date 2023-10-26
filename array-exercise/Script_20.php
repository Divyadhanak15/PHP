<?php

$cities = array("Ladakh", "Kashmir", "Paris", "Itly", "Manali");

rsort($cities);

$clength=count($cities);
for($x=0;$x<$clength;$x++)
  {
  echo $cities[$x];
  echo "<br>";
  }

?>