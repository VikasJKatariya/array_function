<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_slice() function returns selected parts of an array.

//Note: If the array have string keys, the returned array will always preserve the keys 

##########################################################################################

$a=array("red","green","blue","yellow","brown");

echo '<pre>';
print_r(array_slice($a,2));

//output :

/*Array
(
    [0] => blue
    [1] => yellow
    [2] => brown
)*/

##########################################################################################

$a1=array("red","green","blue","yellow","brown");

echo '<pre>';
print_r(array_slice($a1,1,2));

//output :
/*Array
(
    [0] => green
    [1] => blue
)*/

##########################################################################################

$a2=array("red","green","blue","yellow","brown");

echo '<pre>';
print_r(array_slice($a2,-2,1));

//output :
/*Array
(
    [0] => yellow
)*/

##########################################################################################

$a3=array("red","green","blue","yellow","brown");

echo '<pre>';
print_r(array_slice($a3,1,2,true));

//output :

/*Array
(
    [1] => green
    [2] => blue
)*/

##########################################################################################

$a4=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");

echo '<pre>';
print_r(array_slice($a4,1,2));

//output :
/*Array
(
    [b] => green
    [c] => blue
)*/

##########################################################################################

$a5=array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown");

echo '<pre>';
print_r(array_slice($a5,1,2));

//output :
/*Array
(
    [0] => green
    [1] => blue
)*/

##########################################################################################
?>