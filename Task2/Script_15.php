<?php
//Write a PHP script to find the largest of three numbers entered by the user.
      $num1=20;
      $num2=15;
      $num3=22;
      if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo $num3;
      }
?>
