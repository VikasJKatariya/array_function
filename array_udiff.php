<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_udiff() function compares the values of two or more arrays, and returns the differences.

//Note: This function uses a user-defined function to compare the values!

//This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.

############################################################################################

function myfunction($a,$b)
{
if ($a===$b)
  {
  	return 0;
  }
  	return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_udiff($a1,$a2,"myfunction");

echo '<pre>';
print_r($result);

//output: 
/*Array
(
    [a] => red
    [b] => green
)*/

############################################################################################

function myfunction1($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a11=array("a"=>"red","b"=>"green","c"=>"blue","yellow");
$a22=array("A"=>"red","b"=>"GREEN","yellow","black");
$a33=array("a"=>"green","b"=>"red","yellow","black");

$result1=array_udiff($a11,$a22,$a33,"myfunction1");

echo '<pre>';
print_r($result1);

//output :
/*Array
(
    [c] => blue
)
*/

############################################################################################
?>