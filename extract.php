<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The extract() function imports variables into the local symbol table from an array.

//This function uses array keys as variable names and values as variable values. For each element it will create a variable in the current symbol table.

//This function returns the number of variables extracted on success.

############################################################################################

$a = "Original";

$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
extract($my_array);

echo '<pre>';
print_r($my_array);

echo "\$a = $a; \$b = $b; \$c = $c";

//output:

//$a = Cat; $b = Dog; $c = Horse

############################################################################################

?>