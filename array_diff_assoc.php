<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_diff_assoc() function compares the keys and values of two (or more) arrays, and returns the differences.

#############################################################

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_diff_assoc($a1,$a2);

echo '<pre>';
print_r($result);

//output : 
/*Array
(
    [d] => yellow
)*/
#############################################################

$a3=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a4=array("e"=>"red","f"=>"green","g"=>"blue");

$result1=array_diff_assoc($a3,$a4);
echo '<pre>';
print_r($result1);

//output : 
/*Array
(
    [a] => red
    [b] => green
    [c] => blue
    [d] => yellow
)
*/
#############################################################	

$a5=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a6=array("a"=>"red","f"=>"green","g"=>"blue");
$a7=array("h"=>"red","b"=>"green","g"=>"blue");

$result2=array_diff_assoc($a5,$a6,$a7);
echo '<pre>';
print_r($result2);

//output : 
/*Array
(
    [c] => blue
    [d] => yellow
)*/

?>	