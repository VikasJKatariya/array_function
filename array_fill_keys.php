<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_fill_keys() function fills an array with values, specifying keys.
############################################################################################

$keys=array("a","b","c","d");
$a1=array_fill_keys($keys,"blue");

echo '<pre>';
print_r($a1);

//output :
/*Array
(
    [a] => blue
    [b] => blue
    [c] => blue
    [d] => blue
)
*/
############################################################################################

$key = array('tumult', '25', 560, 'cater'); 
$value = array(5,10); 
  
// Creating new array 
$a = array_fill_keys($key, $value); 

echo '<pre>';
print_r($a);

//output : 
/*Array
(
    [tumult] => Array
        (
            [0] => 5
            [1] => 10
        )

    [25] => Array
        (
            [0] => 5
            [1] => 10
        )

    [560] => Array
        (
            [0] => 5
            [1] => 10
        )

    [cater] => Array
        (
            [0] => 5
            [1] => 10
        )

)*/
?>