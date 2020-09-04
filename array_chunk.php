<?php

##########################################################

$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");

echo '<pre>';
print_r(array_chunk($cars,2));

echo '<br>';
echo '<br>';

//output : 
/*Array
(
    [0] => Array
        (
            [0] => Volvo
            [1] => BMW
        )

    [1] => Array
        (
            [0] => Toyota
            [1] => Honda
        )

    [2] => Array
        (
            [0] => Mercedes
            [1] => Opel
        )

)*/

###########################################################

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");

echo '<pre>';
print_r(array_chunk($age,2));

//output : 
/*Array
(
    [0] => Array
        (
            [0] => 35
            [1] => 37
        )

    [1] => Array
        (
            [0] => 43
            [1] => 50
        )

)*/
//so set key and value for this use true in parameter

###########################################################

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");

echo '<pre>';
print_r(array_chunk($age,2,true));

//output : 
// Array
// (
//     [0] => Array
//         (
//             [Peter] => 35
//             [Ben] => 37
//         )

//     [1] => Array
//         (
//             [Joe] => 43
//             [Harry] => 50
//         )

// )


?>