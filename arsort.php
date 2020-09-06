<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The arsort() function sorts an associative array in descending order, according to the value.
 
//Tip: Use the   asort() function to sort an associative array in ascending order, according to the value.

//Tip: Use the   krsort() function to sort an associative array in descending order, according to the key.

############################################################################################

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);

echo '<pre>';
print_r($age);

//output :
/*Array
(
    [Joe] => 43
    [Ben] => 37
    [Peter] => 35
)*/

############################################################################################
?>