<?php

##########################################################################################
//The array_search() function search an array for a value and returns the key.

$a=array("a"=>"red","b"=>"green","c"=>"blue");

echo '<pre>';
echo array_search("green",$a);

//output :

##########################################################################################

$a=array("a"=>"5","b"=>5,"c"=>"5");

echo '<pre>';
echo array_search(5,$a,true); // output : b
echo array_search(5,$a); // output : a

##########################################################################################
?>