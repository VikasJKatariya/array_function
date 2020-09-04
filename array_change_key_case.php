<?php

##########################################################

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

print_r(array_change_key_case($age));
echo '<br>';
echo '<br>';

//output : Array ( [peter] => 35 [ben] => 37 [joe] => 43 )

###########################################################

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

print_r(array_change_key_case($age,CASE_UPPER));
echo '<br>';
echo '<br>';

//output : Array ( [PETER] => 35 [BEN] => 37 [JOE] => 43 )

###########################################################

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

print_r(array_change_key_case($age,CASE_LOWER));
echo '<br>';
echo '<br>';

//output : Array ( [peter] => 35 [ben] => 37 [joe] => 43 )

?>