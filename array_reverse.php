<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_reverse() function returns an array in the reverse order.

##########################################################################################

$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");

echo '<pre>';
print_r(array_reverse($a));

//output :
/*Array
(
    [c] => Toyota
    [b] => BMW
    [a] => Volvo
)*/

##########################################################################################

$a1=array("Volvo","XC90",array("BMW","Toyota"));
$reverse=array_reverse($a1);
$preserve=array_reverse($a1,true);

echo '<pre>';
print_r($a1);

echo '<pre>';
print_r($reverse);

echo '<pre>';
print_r($preserve);

//output :
/*Array
(
    [0] => Volvo
    [1] => XC90
    [2] => Array
        (
            [0] => BMW
            [1] => Toyota
        )

)
Array
(
    [0] => Array
        (
            [0] => BMW
            [1] => Toyota
        )

    [1] => XC90
    [2] => Volvo
)
Array
(
    [2] => Array
        (
            [0] => BMW
            [1] => Toyota
        )

    [1] => XC90
    [0] => Volvo
)*/
?>