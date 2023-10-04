<?php
//Script_21 Script to check if a given number is a palindrome or not and display the result.
$num = 12345654321;
$x = 0;
$n =$num; 
while(floor($num))
{
$mod = $num%10;
$x = $x * 10 + $mod;
$num = $num/10;
} if($n==$x)
{
echo "$n is a Palindrome number.";
} else
{
echo "$n is not a Palindrome number.";
}
?> 
