<?php

//The array_diff_ukey() function compares the keys of two (or more) arrays, and returns the differences.

//Note: This function uses a user-defined function to compare the keys!

//This function compares the keys of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc

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

$result=array_diff_ukey($a1,$a2,"myfunction");

echo '<pre>';
print_r($result);

//output :
/*Array
(
    [c] => blue
)
*/
############################################################################################

function myfunction1($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a3=array("a"=>"red","b"=>"green","c"=>"blue");
$a4=array("a"=>"black","b"=>"yellow","d"=>"brown");
$a5=array("e"=>"purple","f"=>"white","a"=>"gold");

$result1=array_diff_ukey($a3,$a4,$a5,"myfunction1");

echo '<pre>';
print_r($result1);

//output :
/*Array
(
    [c] => blue
)
*/

?>