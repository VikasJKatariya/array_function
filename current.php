<?php

//The current() function returns the value of the current element in an array.

//Every array has an internal pointer to its "current" element, which is initialized to the first element inserted into the array.

//Tip: This function does not move the arrays internal pointer.

//Related methods:

//end() - moves the internal pointer to, and outputs, the last element in the array
//next() - moves the internal pointer to, and outputs, the next element in the array
//prev() - moves the internal pointer to, and outputs, the previous element in the array
//reset() - moves the internal pointer to the first element of the array
//each() - returns the current element key and value, and moves the internal pointer forward

############################################################################################

$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";//output :Peter

echo end($people) . "<br>";    //output :Cleveland

echo next($people) . "<br>";   //output :joe

echo prev($people) . "<br>";   //output :peter

echo reset($people) . "<br>";
echo '<prE>';
print_r(each($people));

//output :
/*Array
(
    [1] => Peter
    [value] => Peter
    [0] => 0
    [key] => 0
)*/

############################################################################################

?>