<?php

//The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function.

//Note: You can change an array element's value in the user-defined function by specifying the first parameter as a reference: &$value (See Example 2).
//
//Tip: To work with deeper arrays (an array inside an array), use the array_walk_recursive() function.

############################################################################################

function myfunction($value,$key)
{
	echo "The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");

echo '<pre>';
array_walk($a,"myfunction");
echo '<br>';


//output :

/*The key a has the value red
The key b has the value green
The key c has the value blue
*/

############################################################################################

function myfunction1($value,$key,$p)
{
	echo "$key $p $value<br>";
}
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a1,"myfunction1","has the value");

//output:

/*a has the value red
b has the value green
c has the value blue*/

############################################################################################

function myfunction2(&$value,$key)
{
	$value="yellow";
}
$a2=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a2,"myfunction2");

echo '<pre>';
print_r($a2);

//output :
/*Array
(
    [a] => yellow
    [b] => yellow
    [c] => yellow
)*/
?>