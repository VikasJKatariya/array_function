<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_keys() function returns an array containing the keys.
############################################################################################

$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");

echo '<pre>';
print_r(array_keys($a));
echo '<br>';	

//output : 
/*Array
(
    [0] => Volvo
    [1] => BMW
    [2] => Toyota
)*/

############################################################################################

$a1=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");

echo "<pre>";
print_r(array_keys($a1,"Highlander"));
echo '<br>';

//output :
/*Array
(
    [0] => Toyota
)*/

#####################################################################################

$a3=array(10,20,30,"10");
echo '<pre>';
print_r($a3);
/*Array
(
    [0] => 10
    [1] => 20
    [2] => 30
    [3] => 10
)*/
echo '<pre>';
print_r(array_keys($a3,"10",false));

//output :
/*Array
(
    [0] => 0
    [1] => 3
)*/
?>