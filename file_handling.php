<?php
echo 'File Handling';
//file handling is the process of creating, reading, updating, and deleting files.

//PHP has several functions for creating, reading, uploading, and editing files.

$file = 'extras/users.txt';

if(file_exists($file)) {
//    echo readfile($file);
   $handle = fopen($file, 'r'); //open for reading
    $content = fread($handle, filesize($file)); //read the file 
    fclose($handle); //close the file
    echo $content;
} else {
    $handle = fopen($file, 'w'); //open for writing
    $content = 'Katie'. PHP_EOL . 'John'. PHP_EOL . 'Sue';
    fwrite($handle, $content); //write to the file
    fclose($handle); //close the file
    echo 'File does not exist';
}
?>

