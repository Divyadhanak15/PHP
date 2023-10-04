<?php   
//Develop a PHP script that takes a sentence as input and counts the number of vowels in it.
    $vCount=0;  
    $str = "Hello my name is Divya Dhanak";  
          
    //Converting entire string to lower case to reduce the comparisons  
    $str = strtolower($str);  
    for($i = 0; $i < strlen($str); $i++)
	{  
              
    //Checks whether a character is a vowel  
		if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') 
		{  
			//Increments the vowel counter  
			$vCount++;  
		}  
	}
  
    echo "Number of vowels : " , $vCount;  
     
?>  