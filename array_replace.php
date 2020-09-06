<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_replace() function replaces the values of the first array with the values from following arrays.

//Tip: You can assign one array to the function, or as many as you like.

//If a key from array1 exists in array2, values from array1 will be replaced by the values from array2. If the key only exists in array1, it will be left as it is (See Example 1 below).

//If a key exist in array2 and not in array1, it will be created in array1 (See Example 2 below).

//If multiple arrays are used, values from later arrays will overwrite the previous ones (See Example 3 below).

//Tip: Use array_replace_recursive() to replace the values of array1 with the values from following arrays recursively.

$a1=array("red","green");
$a2=array("blue","yellow");

echo '<pre>';
print_r(array_replace($a1,$a2));

//output :
/*Array
(
    [0] => blue
    [1] => yellow
)*/

##########################################################################################

$a11=array("a"=>"red","b"=>"green");
$a22=array("a"=>"orange","burgundy");

echo '<pre>';
print_r(array_replace($a11,$a22));


//output :
/*Array
(
    [a] => orange
    [b] => green
    [0] => burgundy
)*/
##########################################################################################
$a111=array("a"=>"red","green");
$a222=array("a"=>"orange","b"=>"burgundy");

echo '<pre>';
print_r(array_replace($a111,$a222));


//output :
/*Array
(
    [a] => orange
    [0] => green
    [b] => burgundy
)*/
##########################################################################################
$a12=array("red","green");
$a23=array("blue","yellow");
$a34=array("orange","burgundy");

echo '<pre>';
print_r(array_replace($a12,$a23,$a34));


//output :
/*Array
(
    [0] => orange
    [1] => burgundy
)*/
##########################################################################################

$a16=array("red","green","blue","yellow");
$a27=array(0=>"orange",3=>"burgundy");

echo '<pre>';
print_r(array_replace($a16,$a27));


//output :
/*Array
(
    [0] => orange
    [1] => green
    [2] => blue
    [3] => burgundy
)*/
##########################################################################################

?>