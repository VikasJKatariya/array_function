<?php

//The array_splice() function removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements.

//Tip: If the function does not remove any elements (length=0), the replaced array will be inserted from the position of the start parameter (See Example 2).

//Note: The keys in the replaced array are not preserved.

############################################################################################

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");

array_splice($a1,0,2,$a2);

echo '<pre>';
print_r($a1);

//output :
/*Array
(
    [0] => purple
    [1] => orange
    [c] => blue
    [d] => yellow
)*/

############################################################################################

$a11=array("0"=>"red","1"=>"green");
$a22=array("0"=>"purple","1"=>"orange");

array_splice($a11,1,0,$a22);

echo '<pre>';
print_r($a11);

//output:
/*Array
(
    [0] => red
    [1] => purple
    [2] => orange
    [3] => green
)*/

############################################################################################

?>