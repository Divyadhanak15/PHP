<?php
//Create a PHP script to check if a given year is a leap year and display the result.
$year = 2024;
if ($year % 400 == 0) {
   echo $year." is a leap year.";
} elseif ($year % 100 == 0) {
   echo $year." is not a leap year.";
} elseif ($year % 4 == 0) {
   echo $year." is a leap year.";
} else {
   echo $year." is not a leap year.";
}
?>