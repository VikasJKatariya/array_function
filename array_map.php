<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

############################################################################################
//The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.

//Tip: You can assign one array to the function, or as many as you like.

############################################################################################

function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);

echo '<pre>';
print_r(array_map("myfunction",$a));

//output :
/*Array
(
    [0] => 1
    [1] => 4
    [2] => 9
    [3] => 16
    [4] => 25
)*/

############################################################################################

function myfunction1($v)
{
if ($v==="Dog")
  {
  return "Fido";
  }
return $v;
}

$a1=array("Horse","Dog","Cat");

echo '<pre>';
print_r(array_map("myfunction1",$a1));

//output :
/*Array
(
    [0] => Horse
    [1] => Fido
    [2] => Cat
)*/

############################################################################################

function myfunction2($v1,$v2)
{
if ($v1===$v2)
  {
  return "same";
  }
return "different";
}

$a11=array("Horse","Dog","Cat");
$a22=array("Cow","Dog","Rat");

echo '<pre>';
print_r(array_map("myfunction2",$a11,$a22));

//output :
/*Array
(
    [0] => different
    [1] => same
    [2] => different
)*/

############################################################################################

function myfunction3($v)
{

$v=strtoupper($v);
  return $v;
}

$a11=array("Animal" => "horse", "Type" => "mammal");

echo '<pre>';
print_r(array_map("myfunction3",$a11));

//output :
/*Array
(
    [Animal] => HORSE
    [Type] => MAMMAL
)*/
############################################################################################

$a111=array("Dog","Cat",true);
$a222=array("Puppy","Kitten","sdf");

echo '<pre>';
print_r(array_map(null,$a111,$a222));

//output :
/*Array
(
    [0] => Array
        (
            [0] => Dog
            [1] => Puppy
        )

    [1] => Array
        (
            [0] => Cat
            [1] => Kitten
        )

    [2] => Array
        (
            [0] => 1
            [1] => sdf
        )

)*/

############################################################################################
?>