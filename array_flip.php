<?php

//The array_flip() function flips/exchanges all keys with their associated values in an array.
############################################################################################

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);

echo '<pre>';
print_r($result);

//output : 
/*Array
(
    [red] => a
    [green] => b
    [blue] => c
    [yellow] => d
)*/
?>