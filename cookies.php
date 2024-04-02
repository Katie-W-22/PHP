<?php
//cookies are used to store data on the client's computer
echo 'Cookies';

//setcookie(name, value, expire, path, domain, secure, httponly);
setcookie('name', 'Katie', time() + 86400); //cookie will expire in 24 hours

if(isset($_COOKIE['name'])) {
    echo "Cookie is set as ${_COOKIE['name']}";
} else {
    echo 'Cookie is not set';
}

//to delete a cookie, set the expiration date to a time in the past
setcookie('name', 'Katie', time() - 3600);
?>