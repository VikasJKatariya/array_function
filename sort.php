<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The sort() function sorts an indexed array in ascending order.

//Tip: Use the rsort() function to sort an indexed array in descending order.

############################################################################################

$cars=array("Volvo","BMW","Toyota");
sort($cars);

echo '<pre>';
print_r($cars);

//output:
/*Array
(
    [0] => BMW
    [1] => Toyota
    [2] => Volvo
)
*/

############################################################################################

$numbers=array(4,6,2,22,11);
sort($numbers);

echo '<pre>';
print_r($numbers);

//output:
/*Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 11
    [4] => 22
)*/

############################################################################################

?>