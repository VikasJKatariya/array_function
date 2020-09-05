<?php

//The array_intersect_key() function compares the keys of two (or more) arrays, and returns the matches.

//This function compares the keys of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.

############################################################################################

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_intersect_key($a1,$a2);

echo '<pre>';
print_r($result);

//output :
/*Array
(
    [a] => red
    [c] => blue
)*/

############################################################################################

$a11=array("red","green","blue","yellow");
$a22=array("red","green","blue");

$result1=array_intersect_key($a11,$a22);

echo '<pre>';
print_r($result1);

//output : 
/*Array
(
    [0] => red
    [1] => green
    [2] => blue
)
*/

############################################################################################

$a111=array("a"=>"red","b"=>"green","c"=>"blue");
$a222=array("c"=>"yellow","d"=>"black","e"=>"brown");
$a333=array("f"=>"green","c"=>"purple","g"=>"red");

$result2=array_intersect_key($a111,$a222,$a333);
echo '<pre>';
print_r($result2);

//output : 
/*Array
(
    [c] => blue
)*/

############################################################################################
?>