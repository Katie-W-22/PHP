<?php
session_start();

if(isset($_SESSION['username'])) {
    echo 'Welcome ' . $_SESSION['username'];
    echo '<a href="logout.php">Logout</a>';
} else {
    echo 'Welcome, guest';
    echo '<a href="/php-katie/sessions.php">Login</a>';
}
?>