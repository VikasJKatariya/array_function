<?php

//The natsort() function sorts an array by using a "natural order" algorithm. The values keep their original keys.

//In a natural algorithm, the number 2 is less than the number 10. In computer sorting, 10 is less than 2, because the first number in "10" is less than 2.

############################################################################################

$temp_files = array("temp15.txt","temp10.txt",
"temp1.txt","temp22.txt","temp2.txt");

sort($temp_files);
echo "Standard sorting: ";
echo '<pre>';
print_r($temp_files);
echo "<br>";

// output:

/*Standard sorting:
Array
(
    [0] => temp1.txt
    [1] => temp10.txt
    [2] => temp15.txt
    [3] => temp2.txt
    [4] => temp22.txt
)*/


natsort($temp_files);
echo "Natural order: ";
echo '<pre>';
print_r($temp_files);

//output :

/*Natural order: 
Array
(
    [0] => temp1.txt
    [3] => temp2.txt
    [1] => temp10.txt
    [2] => temp15.txt
    [4] => temp22.txt
)*/

############################################################################################
?>