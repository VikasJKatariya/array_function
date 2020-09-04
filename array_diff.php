<?php

//The array_diff() function compares the values of two (or more) arrays, and returns the differences.

//This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.

##########################################################

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);

echo '<pre>';
print_r($result);
echo '<br>';

//output: 
/*Array
(
    [d] => yellow
)
*/
##########################################################


$a3=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a4=array("e"=>"red","f"=>"black","g"=>"purple");
$a5=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_diff($a3,$a4,$a5);
print_r($result);

//output:  check only values
/*Array
(
    [b] => green
    [c] => blue
)
*/
?>