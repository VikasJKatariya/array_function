<?php

//The array_shift() function removes the first element from an array, and returns the value of the removed element.

//Note: If the keys are numeric, all elements will get new keys, starting from 0 and increases by 1 (See example below).


$a=array("a"=>"red","b"=>"green","c"=>"blue");

echo '<pre>';
echo array_shift($a);
echo '<br>';
print_r ($a);

//output : 
/*
red
Array
(
    [b] => green
    [c] => blue
)
*/



echo '<br>';echo '<br>';
$a1=array(0=>"red",1=>"green",2=>"blue");
echo array_shift($a1);
echo '<br>';
print_r ($a1);

//output :
/*
red
Array
(
    [0] => green
    [1] => blue
)
*/
?>
