<?php
// Develop a PHP script to check if a specific value exists in an array using the in_array() function.

$MCA = array("php", "java", "html", "css", "c++");

if (in_array("java", $MCA))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
?>