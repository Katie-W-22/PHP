
<?php
//arrays

$numberArray = [1,'apple',3,4,5];
//or 
//$numberArray = array(1,'apple',3,4,5);

print_r ($numberArray); 
var_dump($numberArray);
echo $numberArray[1]; //apple

//associative arrays
$hex_codes = [
    'white' => ' white: #ffffff',
    'black' => 'black: #000000',
    'red' => 'red: #ff0000'
];

echo $hex_codes['red']; // #ff0000

$person = [
    'name' => 'Katie',
    'last_name' => 'Williams',
    'age' => 40,
    'has_pet' => true,
    'money' => 10.56
];

echo $person['last_name']; //Williams

//multi-dimensional arrays
$people = [
    ['name' => 'Katie', 'age' => 40],
    ['name' => 'John', 'age' => 30],
    ['name' => 'Sue', 'age' => 50]
];

echo $people[1]['name']; //John 
?>


