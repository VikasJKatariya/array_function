<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The shuffle() function randomizes the order of the elements in the array.

//This function assigns new keys for the elements in the array. Existing keys will be removed (See Example below).

############################################################################################

$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);

echo '<pre>';
print_r($my_array);

//output:  randomely change remind that.
/*Array
(
    [0] => green
    [1] => red
    [2] => yellow
    [3] => purple
    [4] => blue
)*/

############################################################################################

$my_array1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"purple");

shuffle($my_array1);

echo '<pre>';
print_r($my_array1);

//output:  randomely change remind that.
/*Array
(
    [0] => yellow
    [1] => purple
    [2] => green
    [3] => blue
    [4] => red
)*/

############################################################################################

?>