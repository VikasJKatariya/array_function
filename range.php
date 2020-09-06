<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The range() function creates an array containing a range of elements.

//This function returns an array of elements from low to high.

//Note: If the low parameter is higher than the high parameter, the range array will be from high to low.

############################################################################################

$number = range(0,5);

echo '<pre>';
print_r ($number);

//output :
/*Array
(
    [0] => 0
    [1] => 1
    [2] => 2
    [3] => 3
    [4] => 4
    [5] => 5
)*/
############################################################################################

$number1 = range(0,50,10);
print_r ($number1);

//output :
/*Array
(
    [0] => 0
    [1] => 10
    [2] => 20
    [3] => 30
    [4] => 40
    [5] => 50
)*/

############################################################################################

$letter = range("a","d");
print_r ($letter);

//output :
/*Array
(
    [0] => a
    [1] => b
    [2] => c
    [3] => d
)
*/
############################################################################################
?>