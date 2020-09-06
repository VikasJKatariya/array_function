<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_filter() function filters the values of an array using a callback function.

//This function passes each value of the input array to the callback function. If the callback function returns true, the current value from input is returned into the result array. Array keys are preserved.

############################################################################################
$a1 = array(1,3,2,3,4,0,null,true,false);

echo '<pre>';
print_r(array_filter($a1));

//output : 
/*Array
(
    [0] => 1
    [1] => 3
    [2] => 2
    [3] => 3
    [4] => 4
    [7] => 1
)*/

############################################################################################

function test_odd($var)
  {
  	if($var%2==0) 
       return TRUE; 
    else 
       return FALSE;  
  }

$a2=array(1,3,2,3,4);
echo '<pre>';
print_r(array_filter($a2,"test_odd"));

//output :
/*Array
(
    [2] => 2
    [4] => 4
)*/
?>