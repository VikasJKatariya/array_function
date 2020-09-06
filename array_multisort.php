<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The array_multisort() function returns a sorted array. You can assign one or more arrays. The function sorts the first array, and the other arrays follow, then, if two or more values are the same, it sorts the next array, and so on.

//Note: String keys will be maintained, but numeric keys will be re-indexed, starting at 0 and increase by 1.

//Note: You can assign the sortorder and the sorttype parameters after each array. If not specified, each array parameter uses the default values.

##########################################################################################

$a=array("Dog","Cat","Horse","Bear","Zebra");
array_multisort($a);

echo '<pre>';
print_r($a);

//output : 
/*Array
(
    [0] => Bear
    [1] => Cat
    [2] => Dog
    [3] => Horse
    [4] => Zebra
)*/
##########################################################################################

$a1=array("Dog","Cat");
$a2=array("Fido","Missy");

$data = array_multisort($a1,$a2);

print_r($a1);
print_r($a2);

//output :
/*Array
(
    [0] => Cat
    [1] => Dog
)
Array
(
    [0] => Missy
    [1] => Fido
)*/



$a11=array("Dog","Dog","Cat");
$a22=array("Pluto","Fido","Missy");

array_multisort($a11,SORT_ASC,$a22,SORT_DESC);

echo '<pre>';
print_r($a11);
print_r($a22);

//output :

/*Array
(
    [0] => Cat
    [1] => Dog
    [2] => Dog
)
Array
(
    [0] => Missy
    [1] => Pluto
    [2] => Fido
)*/

##########################################################################################

$a111=array(1,30,15,7,25);
$a222=array(4,30,20,41,66);

$num=array_merge($a111,$a222);

array_multisort($num,SORT_DESC,SORT_NUMERIC);

echo '<pre>';
print_r($num);

//output :
/*Array
(
    [0] => 66
    [1] => 41
    [2] => 30
    [3] => 30
    [4] => 25
    [5] => 20
    [6] => 15
    [7] => 7
    [8] => 4
    [9] => 1
)
*/
##########################################################################################
?>