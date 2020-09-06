<?php

//The end() function moves the internal pointer to, and outputs, the last element in the array.

//Related methods:

//current() - returns the value of the current element in an array
//next() - moves the internal pointer to, and outputs, the next element in the array
//prev() - moves the internal pointer to, and outputs, the previous element in the array
//reset() - moves the internal pointer to the first element of the array
//each() - returns the current element key and value, and moves the internal pointer forward

############################################################################################
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
echo end($people);

//output:

/*Peter
Cleveland*/
############################################################################################
?>