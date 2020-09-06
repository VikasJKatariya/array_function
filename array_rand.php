<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.

##########################################################################################

$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
// it gives 3 randome value 

echo '<pre>';
print_r($random_keys);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];

//output  : //not as per output its change after every refresh because use of array_rand
/*Array
(
    [0] => 0 //random
    [1] => 3 //random
    [2] => 4 //random
)
red         //random
yellow /    /random
brown*/     //random
##########################################################################################

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
echo '<pre>';
print_r(array_rand($a1,1));

//output : any random key //random

##########################################################################################

$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

echo '<pre>';
print_r(array_rand($a,2));

//output : 
/*Array
(
    [0] => a //random
    [1] => c  //random
)*/

##########################################################################################

?>