<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************
//The list() function is used to assign values to a list of variables in one operation.

//Note: Prior to PHP 7.1, this function only worked on numerical arrays.

############################################################################################

$my_array = array("Dog","Cat","Horse");

list($a, $b, $c) = $my_array;
echo "I have several animals, a $a, a $b and a $c.";
echo '<br>';

//output : I have several animals, a Dog, a Cat and a Horse.


############################################################################################

$my_array1 = array("Dog","Cat","Horse");

list($a, , $c) = $my_array1;
echo "Here I only use the $a and $c variables.";

//output : Here I only use the Dog and Horse variables.

############################################################################################
?>