<?php

//The array_intersect_assoc() function compares the keys and values of two (or more) arrays, and returns the matches.

//This function compares the keys and values of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.

############################################################################################

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_intersect_assoc($a1,$a2);

echo '<pre>';
print_r($result);

//output : 

/*Array
(
    [a] => red
    [b] => green
)*/
############################################################################################

$a11=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a22=array("a"=>"red","b"=>"green","g"=>"blue");
$a33=array("a"=>"red","b"=>"green","g"=>"blue");

$result1=array_intersect_assoc($a11,$a22,$a33);

echo '<pre>';
print_r($result1);

//output : 
/*Array
(
    [a] => red
    [b] => green
)*/

############################################################################################

?>