<?php

//The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array.

//Tip: You can add one value, or as many as you like.

//Note: Numeric keys will start at 0 and increase by 1. String keys will remain the same.

############################################################################################

$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");

echo '<pre>';
print_r($a);
//output:
/*Array
(
    [0] => blue
    [a] => red
    [b] => green
)*/
############################################################################################

$a1=array(0=>"red","s"=>"green");
array_unshift($a1,"blue");

echo '<pre>';
print_r($a1);

//output:
/*Array
(
    [0] => blue
    [1] => red
    [s] => green
)*/

############################################################################################
?>