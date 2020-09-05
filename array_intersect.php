<?php

//The array_intersect() function compares the values of two (or more) arrays, and returns the matches.

//This function compares the values of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.

############################################################################################

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);

echo '<pre>';
print_r($result);

//output :

/*Array
(
    [a] => red
    [b] => green
    [c] => blue
)*/

############################################################################################

$a2=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a3=array("e"=>"red","f"=>"black","g"=>"purple");
$a4=array("a"=>"red","b"=>"black","h"=>"yellow");

$result1=array_intersect($a2,$a3,$a4);
echo "<pre>";
print_r($result1);

//output :
/*Array
(
    [a] => red
)*/
?>