<?php
//sessions are used to store data on the server (eg user information)
session_start();

if(isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    if($username == 'Katie' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: /php-katie/extras/dashboard.php');
        exit(); // Don't forget to exit after redirecting
    } else {
        echo 'Incorrect login details';
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">Username</label> <!-- Corrected the typo in "Userame" -->
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
