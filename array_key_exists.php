<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.

//Tip: Remember that if you skip the key when you specify an array, an integer key is generated, starting at 0 and increases by 1 for each value. (See example below)

############################################################################################

$a=array("Volvo"=>"XC90","BMW"=>"X5");

if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }

//output : Key exists!

?>