<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************
//The krsort() function sorts an associative array in descending order, according to the key.

//Tip: Use the ksort() function to sort an associative array in ascending order, according to the key.

//Tip: Use the arsort() function to sort an associative array in descending order, according to the value.

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);

echo '<pre>';
print_r($age);

//output :
/*Array
(
    [Peter] => 35
    [Joe] => 43
    [Ben] => 37
)*/
?>