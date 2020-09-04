<?php

//The array_count_values() function counts all the values of an array.

##########################################################

$a=array("A","Cat","Dog","A","Dog");

echo '<pre>';
print_r(array_count_values($a));

//output
/*Array
(
    [A] => 2
    [Cat] => 1
    [Dog] => 2
)
*/
##########################################################

?>