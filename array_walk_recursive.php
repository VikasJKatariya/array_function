<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

############################################################################################

//The array_walk_recursive() function runs each array element in a user-defined function. The array's keys and values are parameters in the function. The difference between this function and the array_walk() function is that with this function you can work with deeper arrays (an array inside an array).

function myfunction($value,$key)
{
	echo "The key $key has the value $value<br>";
}
$a1=array("a"=>"red","b"=>"green");
$a2=array($a1,"1"=>"blue","2"=>"yellow");

echo '<pre>';
print_r($a2);
/*Array
(
    [0] => Array
        (
            [a] => red
            [b] => green
        )

    [1] => blue
    [2] => yellow
)*/
array_walk_recursive($a2,"myfunction");

//output :
/*
The key a has the value red
The key b has the value green
The key 1 has the value blue
The key 2 has the value yellow*/

############################################################################################
?>