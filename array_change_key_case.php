<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_change_key_case() function changes all keys in an array to lowercase or uppercase.
##########################################################

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

echo '<pre>';
print_r(array_change_key_case($age));
echo '<br>';
echo '<br>';

//output : 
/*Array
(
    [peter] => 35
    [ben] => 37
    [joe] => 43
)*/

###########################################################

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

echo '<pre>';
print_r(array_change_key_case($age,CASE_UPPER));
echo '<br>';
echo '<br>';

//output : 
/*Array
(
    [PETER] => 35
    [BEN] => 37
    [JOE] => 43
)
*/
###########################################################

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

echo '<pre>';
print_r(array_change_key_case($age,CASE_LOWER));
echo '<br>';
echo '<br>';

//output : 
/*Array
(
    [peter] => 35
    [ben] => 37
    [joe] => 43
)*/


?>