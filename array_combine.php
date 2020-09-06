<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_combine() function creates an array by using the elements from one "keys" array and one "values" array.

##########################################################

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);

echo '<pre>';
print_r($c);

//output : 
/*Array
(
    [Peter] => 35
    [Ben] => 37
    [Joe] => 43
)*/

##########################################################
?>