<?php

//The compact() function creates an array from variables and their values.

//Note: Any strings that does not match variable names will be skipped.

############################################################################################

$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");

echo '<pre>';
print_r($result);

//output :
/*Array
(
    [firstname] => Peter
    [lastname] => Griffin
    [age] => 41
)*/

############################################################################################

$firstname1 = "Peter";
$lastname1 = "Griffin";
$age1 = "41";

$name = array("firstname1", "lastname1");
$result1 = compact($name, "age");

print_r($result1);

//output :
/*Array
(
    [firstname] => Peter
    [lastname] => Griffin
    [age] => 41
)*/

############################################################################################
?>