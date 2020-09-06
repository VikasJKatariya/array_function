<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_merge() function merges one or more arrays into one array.

//Tip: You can assign one array to the function, or as many as you like.

//Note: If two or more array elements have the same key, the last one overrides the others.

//Note: If you assign only one array to the array_merge() function, and the keys are integers, the function returns a new array with integer keys starting at 0 and increases by 1 for each value (See example below).

//Tip: The difference between this function and the array_merge_recursive() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.

############################################################################################

$a1=array("red","green");
$a2=array("blue","yellow");

echo '<pre>';
print_r(array_merge($a1,$a2));

//output :
/*Array
(
    [0] => red
    [1] => green
    [2] => blue
    [3] => yellow
)*/

############################################################################################

$a11=array("a"=>"red","b"=>"green");
$a22=array("c"=>"blue","b"=>"yellow");

echo '<pre>';
print_r(array_merge($a11,$a22));

//output: 
/*Array
(
    [a] => red
    [b] => yellow
    [c] => blue
)*/

############################################################################################

$a=array(3=>"red",4=>"green");

echo '<pre>';
print_r(array_merge($a));

//output :
/*Array
(
    [0] => red
    [1] => green
)*/

############################################################################################

$array1=array("Subject" => "Physics","Chemistry", "Biology");
$array2=array("Class-XI", "Class-XII", "Section"=>"A");
$result=array_merge($array1, $array2);

echo '<pre>';
print_r($result);

//output :
/*Array
(
    [Subject] => Physics
    [0] => Chemistry
    [1] => Biology
    [2] => Class-XI
    [3] => Class-XII
    [Section] => A
)*/

############################################################################################

$my_array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a'); 
$my_array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b'); 
$res = array_merge($my_array1,$my_array2); 
echo '<pre>';
print_r($res);

//output :
/*Array
(
    [0] => zero_a
    [1] => two_a
    [2] => three_a
    [3] => one_b
    [4] => three_b
    [5] => four_b
)*/

?>
