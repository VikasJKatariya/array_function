<?php

//The count() function returns the number of elements in an array.

############################################################################################

$cars=array("Volvo","BMW","Toyota");
echo '<pre>';
echo count($cars);
echo '<br>';

//output : 3

############################################################################################

$cars1=array
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

echo "Normal count: " . count($cars1)."<br>";
echo "Recursive count: " . count($cars1)."<br>";
echo "Recursive count: " . count($cars1,1);

//output :
/*Normal count: 3
Recursive count: 3
Recursive count: 8
*/
############################################################################################

?>