<?php

//The asort() function sorts an associative array in ascending order, according to the value.

//Tip: Use the arsort() function to sort an associative array in descending order, according to the value.

//Tip: Use the ksort() function to sort an associative array in ascending order, according to the key.

############################################################################################

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);

echo '<pre>';
print_r($age);

//output :
/*Array
(
    [Peter] => 35
    [Ben] => 37
    [Joe] => 43
)*/

############################################################################################
?>