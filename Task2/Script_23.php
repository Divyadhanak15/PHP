<?php
// Script to determine the largest among three numbers and display the result.
    $num1=50;
    $num2=40;
    $num3=20;
	
    if($num1>$num2 and $num1>$num3)
    {
        echo "Max is $num1";
    }
    else if($num2>$num3)
    {
        echo "Max is $num2";
    }
    else
    {
        echo "Max is $num3";
    }
?>