<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The rsort() function sorts an indexed array in descending order.

//Tip: Use the sort() function to sort an indexed array in ascending order.

############################################################################################

$cars=array("Volvo","BMW","Toyota");
rsort($cars);

echo '<pre>';
print_r($cars);

//output:
/*Array
(
    [0] => Volvo
    [1] => Toyota
    [2] => BMW
)*/

############################################################################################

$numbers=array(4,6,2,22,11);
rsort($numbers);

echo '<pre>';
print_r($numbers);

//output:
/*Array
(
    [0] => 22
    [1] => 11
    [2] => 6
    [3] => 4
    [4] => 2
)*/

############################################################################################

$cars1=array("Volvo","BMW","Toyota");
rsort($cars1,SORT_NUMERIC);

echo '<pre>';
print_r($cars1);

//output:
/*Array
(
    [0] => Volvo
    [1] => BMW
    [2] => Toyota
)*/
############################################################################################
?>