<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_uintersect_assoc() function compares the keys and values of two or more arrays, and returns the matches.

//Note: This function uses a built-in function to compare the keys, and a user-defined function to compare the values!

//This function compares the keys and values of two (or more) arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.

function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"blue","c"=>"green");

$result=array_uintersect_assoc($a1,$a2,"myfunction");

echo '<pre>';
print_r($result);

//output :

/*Array
(
    [a] => red
)
*/
?>