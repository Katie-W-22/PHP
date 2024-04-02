<?php 
/* data types
    1. string
    2. integer
    3. float
    4. boolean
    5. array
    6. object
    7. NULL
    8. resource

    variable naming rules   

    - prefix $ sign
    - start with a letter or underscore
*/
$name = 'Katie';
//echo $name;

$age = 40;
//echo $age;

$has_pet = true;
//echo $has_pet; //shows 1 for true and nothing for false

$money = 10.56;
//echo $money;

//ALT echo $name . ' is ' . $age . ' years old.';
//ALT echo "${name} is ${age} years old."
echo "$name is $age years old."; //double quotes allow for variable interpolation

echo 5 + 5; //10
echo '5' + '5'; //even strings still gives 10

//constants (cannot be changed)
define('database', 'mySQL');
echo database;
?>