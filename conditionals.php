<?php
//conditionals
echo 'conditionals';

//operators
/* == equal to,
    === identical,
    != not equal to,
    !== not identical,
    < less than,
    > greater than,
    <= less than or equal to,
    >= greater than or equal to
    */

//if statements
$age = 4;
if ($age >= 6) {
    echo "You are ${age} years old. You can eat chocolate! :-)";
} else {
    echo "You are ${age} years old. You cannot eat chocolate! :-(";
};

//date function
$time_greeting = date('H:i:s');

if($time_greeting >= '06:00:00' && $time_greeting <= '12:00:00') {
    echo 'Good morning!';
} elseif($time_greeting >= '12:00:00' && $time_greeting <= '18:00:00') {
    echo 'Good afternoon!';
} elseif($time_greeting >= '18:00:00' && $time_greeting <= '22:00:00') {
    echo 'Good evening!';
} else {
    echo 'Good night!';
};

$posts = ['Latest post', 'New post', 'Old post'];

// if(empty($posts)) {
//     echo 'There are no posts.';
// } else {
//     echo "Here is the latest post: ${posts[0]}";
// };

//ALT with a ternary operator
$first_post = !empty($posts) ? "Here is the latest post: ${posts[0]}" : 'There are no posts.';

echo $first_post;

//rather than using the ternary operator, you can use the null coalescing operator
/* $first_post = $posts[0] ?? null;*/

//switch statements
$fave_color = 'red';

switch($fave_color) {
    case 'blue':
        echo 'Your favorite color is blue.';
        break;
    case 'green':
        echo 'Your favorite color is green.';
        break;
    case 'red':
        echo 'Your favorite color is red.';
        break;
    default:
        echo 'Your favorite color is not blue, green, or red.';
};

?>