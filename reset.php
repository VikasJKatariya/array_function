<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The reset() function moves the internal pointer to the first element of the array.

//Related methods:

//current() - returns the value of the current element in an array
//end() - moves the internal pointer to, and outputs, the last element in the array
//next() - moves the internal pointer to, and outputs, the next element in the array
//prev() - moves the internal pointer to, and outputs, the previous element in the array
//each() - returns the current element key and value, and moves the internal pointer forward

############################################################################################

$people1 = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people1) . "<br>";
echo next($people1) . "<br>";

echo reset($people1);
echo '<br>';
echo '<br>';
echo '<br>';
//output :
/*
Peter
Joe
Peter
*/

############################################################################################

$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>"; // The current element is Peter
echo next($people) . "<br>"; // The next element of Peter is Joe
echo current($people) . "<br>"; // Now the current element is Joe
echo prev($people) . "<br>"; // The previous element of Joe is Peter
echo end($people) . "<br>"; // The last element is Cleveland
echo prev($people) . "<br>"; // The previous element of Cleveland is Glenn
echo current($people) . "<br>"; // Now the current element is Glenn
echo reset($people) . "<br>"; // Moves the internal pointer to the first element of the array, which is Peter
echo next($people) . "<br>"; // The next element of Peter is Joe
echo '<pre>';
print_r (each($people)); // Returns the key and value of the current element (now Joe), and moves the internal pointer forward

//output:
/*Peter
Joe
Joe
Peter
Cleveland
Glenn
Glenn
Peter
Joe
Array
(
    [1] => Joe
    [value] => Joe
    [0] => 1
    [key] => 1
)*/
?>
