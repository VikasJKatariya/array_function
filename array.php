<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//Create an indexed array named $cars, assign three elements to it, and then print a text containing the array values:
############################################################################################

$cars=array("Volvo","BMW","Toyota");

echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo '<br>';
echo '<br>';

//output : I like Volvo, BMW and Toyota.

############################################################################################

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

echo "Peter is " . $age['Peter'] . " years old.";
echo '<br>';
echo '<br>';

//output : Peter is 35 years old.

############################################################################################

$carses=array("Volvo","BMW","Toyota");
$arrlength=count($carses);  //total counts of array

for($x=0;$x<$arrlength;$x++)
  {
	  echo $cars[$x];
	  echo "<br>";
  }
echo '<br>';
echo '<br>'; 

//output : Volvo BMW Toyota

############################################################################################

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
  {
	  echo "Key=" . $x . ", Value=" . $x_value;
	  echo "<br>";
  }
echo '<br>';
echo '<br>';

//output : 
// Key=Peter, Value=35
// Key=Ben, Value=37
// Key=Joe, Value=43

############################################################################################

$carsw=array
  (
  array("Volvo",100,96),
  array("BMW",60,59),
  array("Toyota",110,100)
  );

foreach ($carsw as $value) {
	echo '<pre>';
	print_r($value[0].''."&nbsp;");
	print_r($value[1].''."&nbsp;");
	print_r($value[2].''."&nbsp;");
}
//output : 
// Volvo 100 96 
// BMW 60 59 
// Toyota 110 100 
?>