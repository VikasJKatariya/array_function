<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_diff_key() function compares the keys of two (or more) arrays, and returns the differences.

//This function compares the keys of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.

#############################################################

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
echo '<pre>';
print_r($result);

//output :
/*Array
(
    [b] => green
)*/

#############################################################

$a3=array("red","green","blue","yellow");
$a4=array("red","green","blue");

$result1=array_diff_key($a3,$a4);
print_r($result1);

//output : Array
/*(
    [3] => yellow
)*/

#############################################################

$a5=array("a"=>"red","b"=>"green","c"=>"blue");
$a6=array("c"=>"yellow","d"=>"black","e"=>"brown");
$a7=array("f"=>"green","c"=>"purple","g"=>"red");

$result2=array_diff_key($a5,$a6,$a7);
print_r($result2);

//output : 
/*Array
(
    [a] => red
    [b] => green
)*/
?>