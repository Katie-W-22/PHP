<?php
//exceptions are used to handle errors
//try, catch, finally
//each try must have at least one catch or finally block

function inverse($x) {
    if(!$x) {
        throw new Exception('Division by zero');
    }
    return 1/$x;
}

try{
    echo "The inverse of ${x} is "; 
echo inverse(5);
    echo inverse(0);
} catch(Exception $e) {

    echo 'Caught exception: ', $e->getMessage(), "\n";
} finally {
    echo 'First finally';
}

?>