<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The sizeof() function returns the number of elements in an array.

//The sizeof() function is an alias of the count() function.

############################################################################################

$cars1=array("Volvo","BMW","Toyota");
echo sizeof($cars1);

//output: 3


############################################################################################

$cars=array
  (
  "Volvo"=>array
  (
  "XC60",
  "XC90"
  ),
  "BMW"=>array
  (
  "X3",
  "X5"
  ),
  "Toyota"=>array
  (
  "Highlander"
  )
  );

echo "Normal count: " . sizeof($cars)."<br>";
echo "Recursive count: " . sizeof($cars,1);

//output:
/*
Normal count: 3
Recursive count: 8
*/

############################################################################################

?>