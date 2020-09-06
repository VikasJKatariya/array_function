<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_pad() function inserts a specified number of elements, with a specified value, to an array.

//Tip: If you assign a negative size parameter, the function will insert new elements BEFORE the original elements (See example below).

//Note: This function will not delete any elements if the size parameter is less than the size of the original array.

##########################################################################################

$a = array("red","green");
echo '<pre>';
print_r(array_pad($a,6,"blue"));

//output :
/*Array
(
    [0] => red
    [1] => green
    [2] => blue
    [3] => blue
    [4] => blue
    [5] => blue
)*/

##########################################################################################

$a=array("red","green");
echo '<pre>';
print_r(array_pad($a,-5,"blue"));

//output :
/*Array
(
    [0] => blue
    [1] => blue
    [2] => blue
    [3] => red
    [4] => green
)*/

##########################################################################################

?>