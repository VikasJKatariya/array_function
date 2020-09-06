<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_values() function returns an array containing all the values of an array.

//Tip: The returned array will have numeric keys, starting at 0 and increase by 1.

############################################################################################

$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");

echo '<pre>';
print_r(array_values($a));

//output :
/*Array
(
    [0] => Peter
    [1] => 41
    [2] => USA
)*/

############################################################################################

?>