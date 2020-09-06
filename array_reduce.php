<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_reduce() function sends the values in an array to a user-defined function, and returns a string.

//Note: If the array is empty and initial is not passed, this function returns NULL.

##########################################################################################

function myfunction($v1,$v2)
{
//starting $v1 is blank so -Dog
	return $v1 . "-" . $v2;
}

$a=array("Dog","Cat","Horse");

echo '<pre>';
print_r(array_reduce($a,"myfunction"));
echo '<br>';

//output : -Dog-Cat-Horse

##########################################################################################

function myfunction2($v1,$v2)
{
	return $v1 . "-" . $v2;
}
$a2=array("Dog","Cat","Horse");

print_r(array_reduce($a2,"myfunction2",5));
echo '<br>';

//output : 5-Dog-Cat-Horse

##########################################################################################

function myfunction1($v1,$v2)
{
	return $v1+$v2;
}

$a1=array(10,15,20);

echo '<pre>';
print_r(array_reduce($a1,"myfunction1",5));

// output : 50

##########################################################################################

?>