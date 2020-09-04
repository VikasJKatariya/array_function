<?php

// An array that represents a possible record set returned from a database

$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$id = array_column($a, 'id');
$first_name = array_column($a, 'first_name');
$last_names = array_column($a, 'last_name');

echo '<pre>';
print_r($id);

echo '<br>';

echo '<pre>';
print_r($first_name);

echo '<br>';

echo '<pre>';
print_r($last_names);

// output :
    /*Array
    (
        [0] => 5698
        [1] => 4767
        [2] => 3809
    )

    Array
    (
        [0] => Peter
        [1] => Ben
        [2] => Joe
    )

    Array
    (
        [0] => Griffin
        [1] => Smith
        [2] => Doe
    )*/

##########################################################

$last_names = array_column($a, 'last_name', 'id');

echo '<pre>';
print_r($last_names);

//output : 

/*Array
(
    [5698] => Griffin
    [4767] => Smith
    [3809] => Doe
)*/

?>