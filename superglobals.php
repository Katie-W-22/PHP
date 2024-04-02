<?php
//super globals
echo 'Super globals';

//built-in variables that are always available in all scopes

/*
$_GET; //array of variables passed to the current script via the URL parameters (or a form using the GET method)    

$_POST; //array of variables passed to the current script via the HTTP POST method

$_REQUEST; //array of variables passed to the current script via the HTTP request

$_FILES; //array of items uploaded to the current script via the HTTP POST method

$_ENV; //array of variables passed to the current script via the environment method

$_COOKIE; //array of variables passed to the current script via HTTP cookies

$_SESSION; //array of variables passed to the current script via the session

$_SERVER; //array of information about the server and the execution environment
*/


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Super Globals</title>
    </head>
    <body>
        <li>HOST: <?php echo $_SERVER['HTTP_HOST']; ?>
    </body>