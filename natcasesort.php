<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************
//The natcasesort() function sorts an array by using a "natural order" algorithm. The values keep their original keys.

//In a natural algorithm, the number 2 is less than the number 10. In computer sorting, 10 is less than 2, because the first number in "10" is less than 2.

//This function is case-insensitive.

############################################################################################

$temp_files = array("temp15.txt","Temp10.txt",
"temp1.txt","Temp22.txt","temp2.txt");

natsort($temp_files);
echo "Natural order: ";
echo '<pre>';
print_r($temp_files);
echo "<br />";

natcasesort($temp_files);
echo "Natural order case insensitve: ";
print_r($temp_files);

//output :
/*Natural order:
Array
(
    [1] => Temp10.txt
    [3] => Temp22.txt
    [2] => temp1.txt
    [4] => temp2.txt
    [0] => temp15.txt
)

Natural order case insensitve: Array
(
    [2] => temp1.txt
    [4] => temp2.txt
    [1] => Temp10.txt
    [0] => temp15.txt
    [3] => Temp22.txt
)*/
?>