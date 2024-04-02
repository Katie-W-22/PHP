<?php
//loops
echo 'loops';

//new line
echo '<br>';

//for loop
for($x = 0; $x < 5; $x++) {
    echo $x;
};

echo '<br>';
//while loop
$i = 2;
while($i < 5) {
    echo $i;
    $i++;
};

echo '<br>';
//do while loop (will always run at least once because the condition is checked after the loop  runs)
$j = 5;
do {
    echo $j;
    $j++;
} while($j < 5);

echo '<br>';
//foreach loop
$posts = ['first post', 'second post', 'third post'];

//using the interpolation operator
foreach($posts as $index => $post) {
    echo "Index: ${index}, Post: ${post} <br>";
}

//using the concatenation operator
foreach($posts as $index => $post) {
    echo 'Index: ' . $index + 1 . ', Post: ' . $post . '<br>';
}

$person = [
    'name' => 'Katie',
    'last_name' => 'Williams',
    'age' => 40,
    'has_pet' => true,
    'money' => 10.56
];

foreach($person as $key => $value) {
    echo "$key: $value <br>";
   
}
?>

