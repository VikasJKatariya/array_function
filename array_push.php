<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_push() function inserts one or more elements to the end of an array.

//Tip: You can add one value, or as many as you like.

//Note: Even if your array has string keys, your added elements will always have numeric keys (See example below).

##########################################################################################

$a=array("red","green");

array_push($a,"blue","yellow");

echo '<pre>';
print_r($a);

//output :
/*Array
(
    [0] => red
    [1] => green
    [2] => blue
    [3] => yellow
)*/

##########################################################################################

$a1=array("a"=>"red","b"=>"green");

array_push($a1,"blue","yellow");

echo '<pre>';
print_r($a1);

//output :
/*Array
(
    [a] => red
    [b] => green
    [0] => blue
    [1] => yellow
)
*/

##########################################################################################
?>